<?php

namespace App\Providers;

use App\Services\CategoryService;
use App\Services\Impl\CategoryServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CategoryService::class, function ($app) {
            return new CategoryServiceImpl();
        });
    }

    public function provides(): array
    {
        return [
            CategoryService::class
        ];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
