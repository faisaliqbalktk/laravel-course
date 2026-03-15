# Laravel Layout Guide: Components vs. Inheritance

To help you understand fully, here is a comparison of the two ways we've implemented your website layout.

## 1. Traditional Template Inheritance (`@extends`)
This is the approach we just implemented in `main-layout.blade.php`.

### How it looks:
**Layout File (`main-layout.blade.php`):**
```blade
<html>
  <head>
    <title>@yield('title')</title>
  </head>
  <body>
    @yield('main')
  </body>
</html>
```

**Page File (`home.blade.php`):**
```blade
@extends('main-layout')

@section('title', 'Home Page')

@section('main')
  <h1>Welcome</h1>
@endsection
```

---

## 2. Layout Components (`<x-layout>`)
This is the modern approach we used previously in `components/layout.blade.php`.

### How it looks:
**Layout File (`components/layout.blade.php`):**
```blade
<html>
  <head>
    <title>{{ $title }}</title>
  </head>
  <body>
    {{ $main }}
  </body>
</html>
```

**Page File (`home.blade.php`):**
```blade
<x-layout>
  <x-slot name="title">Home Page</x-slot>
  
  <x-slot name="main">
    <h1>Welcome</h1>
  </x-slot>
</x-layout>
```

---

## Key Differences

| Feature | Template Inheritance | Layout Components |
| :--- | :--- | :--- |
| **Logic** | "Top-Down" (Page pushes into layout) | "Bottom-Up" (Layout wraps the page) |
| **Directives** | `@extends`, `@yield`, `@section` | `<x-component>`, `{{ $slot }}`, `<x-slot>` |
| **Flexibility** | Great for simple structures | More modern, better for complex nesting |
| **Syntax** | Traditional PHP-style | HTML-like (Vue/React style) |

### Which one should you use?
Modern Laravel documentation prefers **Components** (`<x-layout>`) because they feel more like modern front-end frameworks. However, **Template Inheritance** is still very popular and important to know for older projects or simpler sites!
