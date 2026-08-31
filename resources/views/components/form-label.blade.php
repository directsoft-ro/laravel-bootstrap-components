@props([
    'required' => false,
    'title',
])
<label {{ $attributes->class(['form-label']) }}>
    @if(!empty($title))
        {{ $title }}
    @endif

    {{ $slot }}

    @if($required)
        <span class="text-danger">*</span>
    @endif
</label>
