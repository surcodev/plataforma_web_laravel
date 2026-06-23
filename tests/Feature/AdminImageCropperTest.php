<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminImageCropperTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_cropper_pages_render_explicit_output_configuration_without_visual_width_attributes(): void
    {
        $admin = $this->createAdminContext();

        $this->actingAs($admin, 'admin')
            ->get(route('admin_setting_logo_index'))
            ->assertOk()
            ->assertSee('data-image-cropper', false)
            ->assertSee('data-output-width="512"', false)
            ->assertSee('data-output-height="512"', false)
            ->assertSee('data-fill-color="transparent"', false)
            ->assertSee('--image-cropper-preview-width: 180px;', false)
            ->assertSee('name="logo"', false)
            ->assertDontSee('x-admin-image-cropper-field', false);

        $this->actingAs($admin, 'admin')
            ->get(route('admin_setting_favicon_index'))
            ->assertOk()
            ->assertSee('data-output-width="512"', false)
            ->assertSee('data-output-height="512"', false)
            ->assertSee('data-fill-color="transparent"', false)
            ->assertSee('name="favicon"', false)
            ->assertDontSee('x-admin-image-cropper-field', false);

        $this->actingAs($admin, 'admin')
            ->get(route('admin_setting_banner_index'))
            ->assertOk()
            ->assertSee('data-output-width="1905"', false)
            ->assertSee('data-output-height="236"', false)
            ->assertSee('--image-cropper-preview-width: 640px;', false)
            ->assertSee('name="banner"', false)
            ->assertDontSee('x-admin-image-cropper-field', false);

        $this->actingAs($admin, 'admin')
            ->get(route('admin_profile'))
            ->assertOk()
            ->assertSee('col-md-4', false)
            ->assertSee('data-output-width="800"', false)
            ->assertSee('data-output-height="800"', false)
            ->assertSee('--image-cropper-preview-width: 180px;', false)
            ->assertSee('name="photo"', false)
            ->assertDontSee(' width="800"', false)
            ->assertDontSee(' height="800"', false)
            ->assertDontSee('x-admin-image-cropper-field', false);
    }

    public function test_admin_cropper_component_was_removed_from_admin_views(): void
    {
        $adminViews = collect([
            resource_path('views/admin/setting/logo.blade.php'),
            resource_path('views/admin/setting/favicon.blade.php'),
            resource_path('views/admin/setting/banner.blade.php'),
            resource_path('views/admin/location/create.blade.php'),
            resource_path('views/admin/location/edit.blade.php'),
            resource_path('views/admin/customer/create.blade.php'),
            resource_path('views/admin/customer/edit.blade.php'),
            resource_path('views/admin/agent/create.blade.php'),
            resource_path('views/admin/agent/edit.blade.php'),
            resource_path('views/admin/testimonial/create.blade.php'),
            resource_path('views/admin/testimonial/edit.blade.php'),
            resource_path('views/admin/profile/index.blade.php'),
        ]);

        $adminViews->each(function (string $viewPath): void {
            $this->assertFileExists($viewPath);
            $contents = file_get_contents($viewPath);

            $this->assertStringNotContainsString('x-admin-image-cropper-field', $contents);
            $this->assertStringContainsString('data-image-cropper', $contents);
            $this->assertStringContainsString('data-output-width', $contents);
            $this->assertStringContainsString('data-output-height', $contents);
        });

        $this->assertFileDoesNotExist(resource_path('views/components/admin-image-cropper-field.blade.php'));
    }

    private function createAdminContext(): Admin
    {
        $setting = new Setting;
        $setting->forceFill([
            'id' => 1,
            'logo' => 'logo.webp',
            'favicon' => 'favicon.webp',
            'banner' => 'banner.webp',
            'footer_copyright' => 'Copyright',
        ])->save();

        view()->share('global_setting', $setting);

        $admin = new Admin;
        $admin->forceFill([
            'name' => 'Admin Test',
            'email' => 'admin-cropper@example.com',
            'photo' => 'admin.webp',
            'password' => bcrypt('password'),
            'token' => 'admin-cropper-token',
        ])->save();

        return $admin;
    }
}
