<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ in_array(app()->getLocale(), ['ur', 'ar']) ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <title>{{ __('msg.title') }}</title>
    <style>
        body { font-family: 'Inter', sans-serif; padding: 20px; }
        .lang-switcher { margin-bottom: 20px; }
        .lang-switcher a { margin-right: 10px; text-decoration: none; color: blue; }
        [dir="rtl"] .lang-switcher a { margin-left: 10px; margin-right: 0; }
    </style>
</head>
<body>
    <div class="lang-switcher">
        <a href="/lang/en">English</a>
        <a href="/lang/ur">Urdu (اردو)</a>
        <a href="/lang/ar">Arabic (العربية)</a>
    </div>

    <div>
        <h1>{{ __('msg.title') }}</h1>
        <ul>
            <li>{{ __('msg.list1') }}</li>
            <li>{{ __('msg.list2') }}</li>
            <li>{{ __('msg.list3') }}</li>
            <li>{{ __('msg.list4') }}</li>
            <li>{{ __('msg.list5') }}</li>
            <li>{{ __('msg.list6') }}</li>
            <li>{{ __('msg.list7') }}</li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <h2>
        {{ __('msg.greeting') }}
    </h2>
    <a href="/about">{{ __('msg.about') }}</a>
    <a href="/">{{ __('msg.home') }}</a>
    <a href="#">{{ __('msg.contact') }}</a>
</body>
</html>