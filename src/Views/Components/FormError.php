<?php

declare(strict_types=1);

namespace Directsoft\LaravelBootstrapComponents\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormError extends Component
{
    public ?string $name;

    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }

    public function render(): View|Closure|string
    {
        return view('bs::components.form-error');
    }
}
