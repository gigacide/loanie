<?php

namespace App\Providers;

use App\Services\ItMediaApiService;
use App\Services\LoanApplicationService;
use App\Services\PostbackService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoanApplicationService::class, function ($app) {
            return new LoanApplicationService(new Client());
        });

        $this->app->singleton(ItMediaApiService::class, function ($app) {
            return new ItMediaApiService();
        });

        $this->app->singleton(PostbackService::class, function ($app) {
            return new PostbackService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
