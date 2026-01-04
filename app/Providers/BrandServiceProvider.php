<?php

namespace App\Providers;

use App\Services\BrandService;
use App\Services\Impl\BrandServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class BrandServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(BrandService::class, function ($app) {
            return new BrandServiceImpl();
        });
    }

    public function provides(): array
    {
        return [
            BrandService::class
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
