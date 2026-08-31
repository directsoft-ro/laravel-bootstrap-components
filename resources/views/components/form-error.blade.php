@props(['name'])

@php
    $attributes = $attributes->class([
        'invalid-feedback',
        'd-block',
    ]);
@endphp

@isset($name)
    @if($errors->has($name))
        <div {{ $attributes }}>
            @if($slot->isEmpty())
                {{ $errors->first($name) }}
            @else
                {{ $slot }}
            @endif
        </div>
    @endif
@else
    <div {{ $attributes }}>{{ $slot }}</div>
@endisset
