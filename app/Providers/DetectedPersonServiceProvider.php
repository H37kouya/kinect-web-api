<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\DetectedPersonRepository;
use App\Repository\GetPeopleCountRepository;
use App\Repository\DetectedPersonRepositoryInterface;
use App\Repository\GetPeopleCountRepositoryInterface;

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
            DetectedPersonRepository::class,
        );

        $this->app->bind(
            GetPeopleCountRepositoryInterface::class,
            GetPeopleCountRepository::class
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
