<?php

declare(strict_types=1);

namespace LaravelBootstrapComponents\LaravelBootstrapComponents\Tests;

use LaravelBootstrapComponents\LaravelBootstrapComponents\LaravelBootstrapComponentsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelBootstrapComponentsServiceProvider::class,
        ];
    }
}
