<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
        ])
    </head>
    <body class="bg-blue-100">
        <div class="flex items-center justify-center p-8">
            <div id="app"></div>
        </div>
    </body>
</html>
