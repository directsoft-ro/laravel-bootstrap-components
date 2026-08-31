@props([
    'fluid' => false,
    'size' => 'md'
])

@php
    $attributes = $attributes->class([
        'container' => ($fluid === false),
        'container-fluid' => $fluid,
        'container-' . $size,
    ]);
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>
