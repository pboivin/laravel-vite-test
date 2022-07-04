<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
        ])
    </head>
    <body>
        <div class="p-4" id="app">
            Hello HTML
        </div>
    </body>
</html>
