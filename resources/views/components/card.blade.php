@props(['title'])
<div {{ $attributes->class(['card']) }}>

    @isset($header)
        <div {{ $header->attributes->class(['card-header']) }}>
            {{ $header }}
        </div>
    @endisset

    @isset($title)
        @if (!empty($title))
            <div class="card-header">
                <div class="card-title mb-0">
                    {{ $title }}
                </div>
            </div>
        @endif
    @endisset

    @isset($default)
        <div {{ $default->attributes->class(['card-body']) }}>
            {{ $slot }}
        </div>
    @else
        <div {{ $slot->attributes->class(['card-body']) }}>
            {{ $slot }}
        </div>
    @endisset

    @isset($footer)
        <div {{ $footer->attributes->class(['card-footer']) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
