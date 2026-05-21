<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $agent_id
 * @property int $package_id
 * @property string $invoice_no
 * @property string|null $transaction_id
 * @property string $payment_method
 * @property string $paid_amount
 * @property string|null $purchase_date
 * @property string|null $expire_date
 * @property string $status
 * @property int $currently_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent|null $agent
 * @property-read \App\Models\Package|null $package
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereCurrentlyActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
