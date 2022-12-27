<?php

namespace App\Providers;


use App\Repositories\productRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\categoryRepository;
use App\Repositories\orderRepository;
use App\Repositories\Interfaces\orderRepositoryInterface;
use App\Repositories\Interfaces\productRepositoryInterface;
use App\Repositories\Interfaces\categoryRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(categoryRepositoryInterface::class,categoryRepository::class);
        $this->app->bind(productRepositoryInterface::class,productRepository::class);
        $this->app->bind(orderRepositoryInterface::class,orderRepository::class);
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
