<?php

declare(strict_types=1);

namespace DirectsoftRo\LaravelBootstrapComponents\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormGroup extends Component
{
    public function render(): View|Closure|string
    {
        return view('bs::components.form-group');
    }
}
