<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Authentication</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <nav>
            <h1>CRUD Application</h1>
            <a href=" {{ route('login') }}" class>Log In</a>
            <a href=" {{ route('register') }}">Register</a>
        </nav>
    </header>
    <div class="text-center px-8 py-12">
        <h1>Welcome to a Laravel CRUD Application!</h1>
        <p>Click the options at the top of the page to move on.</p>
    </div>
</body>
</html>
