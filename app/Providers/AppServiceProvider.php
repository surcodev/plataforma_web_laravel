<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registrar cualquier servicio de aplicación.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        // Solo cargar settings si la tabla existe
        if (Schema::hasTable('settings')) {
            $setting_data = Setting::where('id', 1)->first();
            view()->share('global_setting', $setting_data);
        }
    }
}
