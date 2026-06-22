<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Agent;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Mockery;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Tests\TestCase;

class PayPalPaymentTest extends TestCase
{
    use RefreshDatabase;

    public function test_paypal_webhook_successfully_registers_payment(): void
    {
        config([
            'paypal.mode' => 'sandbox',
            'paypal.webhook_id' => 'WH-SANDBOX-TEST',
        ]);

        $agent = new Agent;
        $agent->forceFill([
            'name' => 'Agente webhook',
            'email' => 'webhook-agent@example.com',
            'password' => bcrypt('password'),
            'status' => '1',
        ])->save();

        $previousPackage = new Package;
        $previousPackage->forceFill([
            'name' => 'Plan anterior',
            'price' => 20,
            'allowed_days' => 15,
        ])->save();

        $newPackage = new Package;
        $newPackage->forceFill([
            'name' => 'Plan webhook',
            'price' => 75,
            'allowed_days' => 45,
        ])->save();

        $previousOrder = new Order;
        $previousOrder->forceFill([
            'agent_id' => $agent->id,
            'package_id' => $previousPackage->id,
            'invoice_no' => 'INV-WEBHOOK-PREVIOUS',
            'transaction_id' => 'PAYPAL-WEBHOOK-PREVIOUS',
            'payment_method' => 'PayPal',
            'paid_amount' => 20,
            'purchase_date' => now()->toDateString(),
            'expire_date' => now()->addDays(15)->toDateString(),
            'status' => 'Completed',
            'currently_active' => 1,
        ])->save();

        $paypal = Mockery::mock(PayPalClient::class);
        $paypal->shouldReceive('setApiCredentials')
            ->once()
            ->with(config('paypal'))
            ->andReturnSelf();
        $paypal->shouldReceive('getAccessToken')
            ->once()
            ->andReturn(['access_token' => 'sandbox-token']);
        $paypal->shouldReceive('setWebHookID')
            ->once()
            ->with('WH-SANDBOX-TEST')
            ->andReturnSelf();
        $paypal->shouldReceive('verifyIPN')
            ->once()
            ->with(Mockery::type(\Illuminate\Http\Request::class))
            ->andReturn(['verification_status' => 'SUCCESS']);

        $this->app->instance(PayPalClient::class, $paypal);

        $transactionId = 'PAYPAL-WEBHOOK-SALE-001';
        $response = $this->withHeaders([
            'PAYPAL-AUTH-ALGO' => 'SHA256withRSA',
            'PAYPAL-TRANSMISSION-ID' => 'transmission-test-id',
            'PAYPAL-CERT-URL' => 'https://api-m.sandbox.paypal.com/cert.pem',
            'PAYPAL-TRANSMISSION-SIG' => 'sandbox-signature',
            'PAYPAL-TRANSMISSION-TIME' => now()->toIso8601String(),
        ])->postJson(route('paypal_webhook'), [
            'id' => 'WH-EVENT-TEST-001',
            'event_type' => 'PAYMENT.CAPTURE.COMPLETED',
            'resource' => [
                'id' => $transactionId,
                'state' => 'completed',
                'amount' => [
                    'total' => '75.00',
                    'currency' => 'USD',
                ],
                'custom_id' => json_encode([
                    'agent_id' => $agent->id,
                    'package_id' => $newPackage->id,
                ], JSON_THROW_ON_ERROR),
            ],
        ]);

        $response
            ->assertOk()
            ->assertJson(['status' => 'processed']);

        $this->assertSame('sandbox', config('paypal.mode'));
        $this->assertDatabaseHas('orders', [
            'agent_id' => $agent->id,
            'package_id' => $newPackage->id,
            'transaction_id' => $transactionId,
            'payment_method' => 'PayPal',
            'paid_amount' => 75,
            'status' => 'Completed',
            'currently_active' => 1,
        ]);
        $this->assertDatabaseHas('orders', [
            'id' => $previousOrder->id,
            'currently_active' => 0,
        ]);
        $this->assertSame(1, Order::where('agent_id', $agent->id)->where('currently_active', 1)->count());
    }

    public function test_completed_payment_activates_plan_and_rejects_duplicate_transaction(): void
    {
        Mail::fake();

        $admin = new Admin;
        $admin->forceFill([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'token' => 'admin-token',
        ])->save();

        $agent = new Agent;
        $agent->forceFill([
            'name' => 'Agente de prueba',
            'email' => 'agent@example.com',
            'password' => bcrypt('password'),
            'status' => '1',
        ])->save();

        $previousPackage = new Package;
        $previousPackage->forceFill([
            'name' => 'Plan anterior',
            'price' => 20,
            'allowed_days' => 15,
        ])->save();

        $newPackage = new Package;
        $newPackage->forceFill([
            'name' => 'Plan profesional',
            'price' => 50,
            'allowed_days' => 30,
        ])->save();

        $previousOrder = new Order;
        $previousOrder->forceFill([
            'agent_id' => $agent->id,
            'package_id' => $previousPackage->id,
            'invoice_no' => 'INV-PREVIOUS',
            'transaction_id' => 'PAYPAL-PREVIOUS-TRANSACTION',
            'payment_method' => 'PayPal',
            'paid_amount' => 20,
            'purchase_date' => now()->toDateString(),
            'expire_date' => now()->addDays(15)->toDateString(),
            'status' => 'Completed',
            'currently_active' => 1,
        ])->save();

        $transactionId = 'PAYPAL-TEST-TRANSACTION-001';
        $paypal = Mockery::mock(PayPalClient::class);
        $paypal->shouldReceive('setApiCredentials')
            ->twice()
            ->with(config('paypal'))
            ->andReturnSelf();
        $paypal->shouldReceive('getAccessToken')
            ->twice()
            ->andReturn(['access_token' => 'sandbox-token']);
        $paypal->shouldReceive('capturePaymentOrder')
            ->twice()
            ->with('PAYPAL-CAPTURE-TOKEN')
            ->andReturn([
                'id' => $transactionId,
                'status' => 'COMPLETED',
            ]);

        $this->app->instance(PayPalClient::class, $paypal);

        $firstResponse = $this->actingAs($agent, 'agent')
            ->withSession(['package_id' => $newPackage->id])
            ->get(route('agent_paypal_success', ['token' => 'PAYPAL-CAPTURE-TOKEN']));

        $firstResponse
            ->assertRedirect(route('agent_order'))
            ->assertSessionHas('success');

        $this->assertSame('sandbox', config('paypal.mode'));
        $this->assertDatabaseHas('orders', [
            'agent_id' => $agent->id,
            'package_id' => $newPackage->id,
            'transaction_id' => $transactionId,
            'payment_method' => 'PayPal',
            'paid_amount' => 50,
            'status' => 'Completed',
            'currently_active' => 1,
        ]);
        $this->assertDatabaseHas('orders', [
            'id' => $previousOrder->id,
            'currently_active' => 0,
        ]);

        $secondResponse = $this->withSession(['package_id' => $newPackage->id])
            ->get(route('agent_paypal_success', ['token' => 'PAYPAL-CAPTURE-TOKEN']));

        $secondResponse
            ->assertRedirect(route('agent_payment'))
            ->assertSessionHas('error', 'Esta transacción de PayPal ya fue procesada anteriormente.');

        $this->assertDatabaseCount('orders', 2);
        $this->assertSame(1, Order::where('transaction_id', $transactionId)->count());
        $this->assertSame(1, Order::where('agent_id', $agent->id)->where('currently_active', 1)->count());
    }
}
