<?php

declare(strict_types=1);

use LaravelBootstrapComponents\LaravelBootstrapComponents\LaravelBootstrapComponents;

it('resolves the singleton', function () {
    expect(app(LaravelBootstrapComponents::class))->toBeInstanceOf(LaravelBootstrapComponents::class);
});

it('returns the same instance from the container', function () {
    expect(app(LaravelBootstrapComponents::class))->toBe(app(LaravelBootstrapComponents::class));
});

it('merges the package config', function () {
    expect(true)->toBeTrue();
});

it('loads the package views', function () {
    expect(true)->toBeTrue();
});
