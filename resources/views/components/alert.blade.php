@props([
    'variant' => 'primary',
    'dismissible' => false,
])

@php
$attributes = $attributes->class([
    'alert',
    'alert-' . $variant,
    'alert-dismissible' => $dismissible,
]);
@endphp

<div {{ $attributes }}>
    {{ $slot }}

    @if ($dismissible)
        <x::bs.button-close data-bs-dismiss="alert" />
    @endif
</div>
