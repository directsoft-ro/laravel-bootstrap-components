@props([
    'large' => false,
    'small' => false,
    'invalid' => false,
    'placeholder',
    'options',
])

@php
    if (isset($name)) {
        $invalid = $errors->has($name);
    }

    $attributes = $attributes->class([
        'form-select',
        'form-select-lg' => $large,
        'form-select-sm' => $small,
        'is-invalid' => $invalid,
    ]);
@endphp

<select {{ $attributes }}>
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
