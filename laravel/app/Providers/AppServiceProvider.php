<?php

namespace App\Providers;

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
        // $this->app->singleton(
        //     ItemRepositoryInterface::class,
        //     ItemRepository::class
        // );
        // $this->app->singleton(
        //     ItemServiceInterface::class,
        //     ItemService::class
        // );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
