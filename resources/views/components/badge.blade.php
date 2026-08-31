@props([
    'variant' => 'primary',
    'title',
])

@php
$attributes = $attributes->class([
    'badge',
    'text-bg-' . $variant,
]);
@endphp

<span {{ $attributes }}>
    @isset($title)
        {{ $title }}
    @else
        {{ $slot }}
    @endisset
</span>
