<?php

namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
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
        $storagePath = app()->storagePath();

        File::ensureDirectoryExists($storagePath . '/framework/cache');
        File::ensureDirectoryExists($storagePath . '/framework/sessions');
        File::ensureDirectoryExists($storagePath . '/framework/views');
        File::ensureDirectoryExists($storagePath . '/logs');
    }
}
