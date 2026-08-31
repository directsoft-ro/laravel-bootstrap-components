<?php

declare(strict_types=1);

namespace LaravelBootstrapComponents\LaravelBootstrapComponents;

use Illuminate\Support\ServiceProvider;

class LaravelBootstrapComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bootstrap.php', 'bootstrap');

        $this->app->singleton(LaravelBootstrapComponents::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bs');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/bootstrap.php' => config_path('bootstrap.php'),
        ], ['bootstrap', 'bootstrap-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bootstrap'),
        ], ['bootstrap', 'bootstrap-views']);
    }
}
