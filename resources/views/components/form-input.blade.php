@props([
    'type' => 'text',
    'large' => false,
    'small' => false,
    'spellcheck' => 'false',
    'invalid' => false,
])

@php
    if (isset($name)) {
        $invalid = $errors->has($name);
    }

    $attributes = $attributes->merge([
        'type' => $type,
        'spellcheck' => $spellcheck,
    ]);

    $attributes = $attributes->class([
        'form-control',
        'form-control-lg' => $large,
        'form-control-sm' => $small,
        'is-invalid' => $invalid,
    ]);
@endphp

<input {{ $attributes }}>
