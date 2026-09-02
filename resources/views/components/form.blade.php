@props(['method' => 'POST', 'files' => false, 'novalidate' => true])

@php
$attributes = $attributes->merge([
    'method' => (strtolower($method) === 'get' ? 'GET' : 'POST'),
    'enctype' => ($files ? 'multipart/form-data' : null),
    'novalidate' => $novalidate ? 'novalidate' : null,
]);
@endphp

<form {{ $attributes }}>
    @if(in_array($method, ['POST', 'PUT', 'PATCH', 'DELETE']))
        @csrf
        @method($method)
    @endif

    {{ $slot }}
</form>
