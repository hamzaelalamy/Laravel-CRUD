<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel tutorial</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <h1>Welcome to Laravel tutorial</h1>
        <p>Click the button below to see the list of users</p>
        <a href="/users"><button>Users</button></a>
    </body>
</html>
