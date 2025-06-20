<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <h2>Welcome to the page!</h2>

        <livewire:book-list>


    </main>
</body>
</html>
