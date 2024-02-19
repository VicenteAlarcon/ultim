<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserControllerService;
class UserManagementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserManagementService::class, function ($app) {
            return new UserManagementService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
