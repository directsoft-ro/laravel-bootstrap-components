<?php

declare(strict_types=1);

namespace Directsoft\LaravelBootstrapComponents\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSelect extends Component
{
    use HandlesValidationErrors;

    public ?string $name;

    /**
     * Create a new component instance.
     */
    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('bs::components.form-select');
    }
}
