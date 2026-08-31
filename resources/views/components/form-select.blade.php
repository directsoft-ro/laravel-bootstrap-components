@props([
    'large' => false,
    'small' => false,
    'invalid' => false,
    'placeholder',
    'options',
])

@php
    $classes = [
        'form-select',
        'form-select-lg' => $large,
        'form-select-sm' => $small,
        'is-invalid' => $invalid,
    ];
@endphp

<select {{ $attributes->class($classes) }}>
    @if(!empty($placeholder))
        <option value="">{{ $placeholder }}</option>
    @endif

    @isset($options)
        @if(is_array($options) && count($options))
            @foreach($options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        @endif
    @endisset

    {{ $slot }}
</select>
