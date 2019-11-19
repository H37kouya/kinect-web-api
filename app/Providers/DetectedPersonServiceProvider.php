<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\DetectedPersonRepository;
use App\Repository\DetectedPersonRepositoryInterface;

class DetectedPersonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            DetectedPersonRepositoryInterface::class,
            DetectedPersonRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
