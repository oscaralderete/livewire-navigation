<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <x-navigation />

    <main>{{ $slot }}</main>

    <x-footer-navigation />
</body>

</html>
