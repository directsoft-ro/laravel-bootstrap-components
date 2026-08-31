@props([
    'large' => false,
    'small' => false,
    'spellcheck' => 'false',
    'invalid' => false,
    'rows' => 4,
    'value' => null,
])

@php
    $attributes = $attributes->merge([
        'spellcheck' => $spellcheck,
        'rows' => $rows,
    ]);

    $attributes = $attributes->class([
        'form-control',
        'form-control-lg' => $large,
        'form-control-sm' => $small,
        'is-invalid' => $invalid,
    ]);
@endphp

<textarea {{ $attributes }}>{{ $value }}</textarea>
