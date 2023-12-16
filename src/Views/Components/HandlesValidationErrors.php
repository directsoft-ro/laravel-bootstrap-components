<?php

declare(strict_types=1);

namespace DirectsoftRo\LaravelBootstrapComponents\Views\Components;

use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;
use Illuminate\Support\ViewErrorBag;

trait HandlesValidationErrors
{
    protected function getErrorBag(string $bag = 'default'): MessageBag
    {
        $bags = View::shared('errors', request()->session()->get('errors', new ViewErrorBag()));

        return $bags->getBag($bag);
    }

    public function hasError(string|null $name, string $bag = 'default'): bool
    {
        if (!$name) {
            return false;
        }

        $name = str_replace(['[', ']'], ['.', ''], Str::before($name, '[]'));

        $errorBag = $this->getErrorBag($bag);

        return $errorBag->has($name) || $errorBag->has($name . '.*');
    }
}
