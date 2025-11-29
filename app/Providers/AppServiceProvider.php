<?php

declare(strict_types=1);

namespace App\Providers;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Lorisleiva\Actions\Facades\Actions;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            try {
                Actions::registerCommands();
            } catch (Exception) {
                // Ignore if no actions to register
            }
        }

        $this->bootModelsDefaults();
    }

    private function bootModelsDefaults(): void
    {
        Model::unguard();
    }
}
