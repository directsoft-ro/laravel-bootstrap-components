@props([
    'type' => 'text',
    'large' => false,
    'small' => false,
    'spellcheck' => 'false',
    'invalid' => false,
])

@php
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
