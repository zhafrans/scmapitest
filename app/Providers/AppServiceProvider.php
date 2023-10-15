<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            if (!empty(auth()->user()->hak_akses)) {
                if (auth()->user()->hak_akses == "admin") {
                    return 1;
                }
            }
            return 0;
        });

        Blade::if('notCustomer', function () {
            if (!empty(auth()->user()->hak_akses)) {
                if (auth()->user()->hak_akses == "admin" || auth()->user()->hak_akses == "penjual") {
                    return 1;
                }
            }
            return 0;
        });
    }
}
