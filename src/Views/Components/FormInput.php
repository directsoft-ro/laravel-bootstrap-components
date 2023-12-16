<?php

declare(strict_types=1);

namespace DirectsoftRo\LaravelBootstrapComponents\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    use HandlesValidationErrors;

    public string $type;

    public ?string $name;

    public string $value;

    public string $id;

    public function __construct(?string $name = null, string $type = 'text', string $value = '', string $id = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->id = $id;
    }

    public function render(): View|Closure|string
    {
        return view('bs::components.form-input');
    }
}
