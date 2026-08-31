@props([
    'id' => null,
    'for' => null,
    'invalid' => false,
    'switch' => false,
    'required' => false,
])

@php
    $identifier = ($for ?? $id) ?? 'checkbox-' . uniqid();

    $classes = [
        'form-check',
        $switch ? 'form-switch' : '',
    ];

    $defaultInputAttributes = [
        'type' => 'checkbox',
        'id' => $identifier,
        'role' => $switch ? 'switch' : null,
    ];

    $inputClasses = [
        'form-check-input',
        $invalid ? 'is-invalid' : '',
    ];

    $labelClasses = [
        'form-check-label',
        $required ? 'required' : '',
    ];
@endphp

<div class="{{ trim(implode(' ', $classes)) }}">
    <input {{ $attributes->merge($defaultInputAttributes)->class($inputClasses) }}>
    <label class="{{ trim(implode(' ', $labelClasses)) }}" for="{{ $identifier }}">
        @if($required)
            <span class="text-danger">*</span>
        @endif
        {{ $slot }}
    </label>
</div>
