<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
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
        // Register the `lorisleiva/laravel-actions` commands if we are running in the console
        if ($this->app->runningInConsole()) {
            \Lorisleiva\Actions\Facades\Actions::registerCommands();
        }
    }
}
