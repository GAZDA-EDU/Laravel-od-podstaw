<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <main>
            @yield('content')
        </main>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
