@props([
    'value' => null,
    'options' => [],
])
<select {{ $attributes->merge(['name' => $name])->class(['form-select', 'is-invalid' => $hasError($name)]) }}>
    @foreach($options as $key => $text)
        <option value="{{ $key }}" {{ old($name, $value) == $key ? 'selected' : '' }}>
            {{ $text }}
        </option>
    @endforeach
    {{ $slot }}
</select>
