@props([
    'size' => 'md',
    'centered' => false,
    'static' => false,
    'title',
    'tabIndex' => '-1'
])

@php
    $attributes = $attributes->merge([
        'tabindex' => $tabIndex,
        'data-bs-backdrop' => $static ? 'static' : null,
        'data-bs-keyboard' => $static ? 'false' : null
    ]);

    $attributes = $attributes->class(['modal', 'fade']);

    $dialogClasses = [];
    $dialogClasses[] = 'modal-dialog';
    $dialogClasses[] = 'modal-' . $size;
    $dialogClasses[] = $centered ? 'modal-dialog-centered' : '';
@endphp

<div {{ $attributes }}>
    <div class="{{ implode(' ', $dialogClasses) }}">
        <div class="modal-content">

            @isset($header)
                <div {{ $header->attributes->class(['modal-header']) }}>
                    {{ $header }}
                </div>
            @endisset

            @isset($title)
                <div class="modal-header">
                    <div class="modal-title">
                        {{ $title }}
                    </div>

                    <x::bs.button-close data-bs-dismiss="modal" />
                </div>
            @endisset

            @isset($default)
                <div {{ $default->attributes->class(['modal-body']) }}>
                    {{ $slot }}
                </div>
            @else
                <div {{ $slot->attributes->class(['modal-body']) }}>
                    {{ $slot }}
                </div>
            @endisset

            @isset($footer)
                <div {{ $footer->attributes->class(['modal-footer']) }}>
                    {{ $footer }}
                </div>
            @endisset

        </div>
    </div>
</div>
