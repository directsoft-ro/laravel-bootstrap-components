@props([
    'type' => 'button',
    'white' => false,
    'ariaLabel' => __('Close'),
])

@php
    $attributes = $attributes->merge([
        'type' => $type,
        'aria-label' => $ariaLabel,
    ]);

    $attributes = $attributes->class([
        'btn-close',
        'btn-close-white' => $white,
    ]);
@endphp

<button {{ $attributes }}>{{ $slot }}</button>
