<?php

namespace Directsoft\LaravelBootstrapComponents\Providers;

use Directsoft\LaravelBootstrapComponents\Views\Components\Form;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormError;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormGroup;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormInput;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormLabel;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormSelect;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormText;
use Directsoft\LaravelBootstrapComponents\Views\Components\FormTextarea;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'bs');

        Blade::component('bs.form', Form::class);
        Blade::component('bs.form-error', FormError::class);
        Blade::component('bs.form-group', FormGroup::class);
        Blade::component('bs.form-input', FormInput::class);
        Blade::component('bs.form-label', FormLabel::class);
        Blade::component('bs.form-select', FormSelect::class);
        Blade::component('bs.form-text', FormText::class);
        Blade::component('bs.form-textarea', FormTextarea::class);
    }

    public function register(): void
    {
        //
    }
}
