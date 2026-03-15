<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ in_array(app()->getLocale(), ['ur', 'ar']) ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <title>{{ __('msg.about') }}</title>
</head>
<body>
    <div>
        <h2>{{ __('msg.about_page') }}</h2>
        <a href="/">{{ __('msg.home') }}</a>
    </div>
</body>
</html>