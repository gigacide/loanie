<?php

namespace App\Providers;

use App\Buyers\ZeroParallel\ZeroParallelApiClient;
use App\Buyers\ZeroParallel\ZeroParallelLeadStatusApi;
use App\Services\Postback\PostbackHttpClient; // Replace with your actual HTTP client class
use App\Services\Postback\PostbackParameterReplacer;
use App\Services\Postback\PostbackResponseHandler;
use App\Services\Postback\PostbackService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ZeroParallelApiClient::class, function ($app) {
            $apiId = config('zeroparallel.api_id'); // Config key for API ID
            $apiPassword = config('zeroparallel.api_password'); // Config key for API Password

            return new ZeroParallelApiClient($apiId, $apiPassword);
        });

        $this->app->bind(ZeroParallelLeadStatusApi::class, function ($app) {
            // Use the ZeroParallelApiClient from the app container
            $apiClient = $app->make(ZeroParallelApiClient::class);

            return new ZeroParallelLeadStatusApi(
                $apiClient,
                'https://leads.zeroparallel.com/lead/check-lead-status',
                $apiId = config('zeroparallel.api_id'),
                $apiPassword = config('zeroparallel.api_password'),
            );
        });


        $this->app->singleton(PostbackService::class, function ($app) {
            // Create instances of PostbackParameterReplacer and PostbackResponseHandler here or use existing dependencies
            $parameterReplacer = new PostbackParameterReplacer();
            $responseHandler = new PostbackResponseHandler();

            // Replace YourHttpClient with the actual HTTP client class you are using
            $httpClient = new PostbackHttpClient(new Client(), $responseHandler);

            return new PostbackService($parameterReplacer, $httpClient);
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
