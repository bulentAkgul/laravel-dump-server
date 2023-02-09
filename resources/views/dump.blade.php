<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite([])
    </head>
    <body>
        <?= include base_path('vendor/bakgul/laravel-dump-server/resources/dump.html') ?>
    </body>
</html>
