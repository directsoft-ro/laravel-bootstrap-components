<textarea {{ $attributes->merge(['spellcheck' => 'false', 'rows' => 4, 'name' => $name])->class(['form-control', 'is-invalid' => $hasError($name)]) }}>{!! isset($value) ? $value : '' !!}</textarea>
