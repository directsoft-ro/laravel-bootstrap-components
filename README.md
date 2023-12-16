# Laravel Bootstrap 5 Components

## Import bootstrap style

```html

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
```

### Install
```sh
composer require directsoft-ro/laravel-bootstrap-components
```

## Components

### Form
```html
<x-bs.form action="" method="GET|POST|PUT|PATCH|DELETE"></x-bs.form>
```

### Form group
```html
<x-bs.form-group></x-bs.form-group>
```

### Form input
```html
<x-bs.form-input />
```

### Form select
```html
<x-bs.form-select :options="$options" />
```

### Form textarea
```html
<x-bs.form-textarea />
```

### Form error
```html
<x-bs.form-error />
```

### Form label
```html
<x-bs.form-label>Text</x-bs.form-label>
```

### Form text
```html
<x-bs.form-text>Text</x-bs.form-text>
```
