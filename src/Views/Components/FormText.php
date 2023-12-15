<?php

declare(strict_types=1);

namespace Directsoft\LaravelBootstrapComponents\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormText extends Component
{
    public function render(): View|Closure|string
    {
        return view('bs::components.form-text');
    }
}
