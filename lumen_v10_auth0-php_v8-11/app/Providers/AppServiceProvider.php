<?php

namespace App\Providers;

use App\Services\JWTService;
use App\Services\JWTServiceInterface;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
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
        $this->app->bind(JWTServiceInterface::class, JWTService::class);
        $this->app->singleton('httpClient', function () {
            return GuzzleAdapter::createWithConfig([]);
        });
    }
}
