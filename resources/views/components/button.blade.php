@props([
    'type' => 'button',
    'variant' => 'primary',
    'small' => false,
    'large' => false,
    'href' => null,
    'disabled' => false,
    'block' => false
])

@php
    $attributes = $attributes->class([
        'btn',
        'btn-' . $variant,
        'btn-sm' => $small,
        'btn-lg' => $large,
        'w-100' => $block,
        'disabled' => $disabled
    ]);
@endphp

@if ($href)
    <a {{ $attributes->merge(['href' => $href]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => $type]) }}>
        {{ $slot }}
    </button>
@endif
