<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ninja network</title>

    @vite('resources/css/app.css')
</head>

<body>

    <header class="text-3xl font-bold underline">
        <nav>
            <h1>Ninja Network</h1>
            <a href="/">Home</a>
            <a href="{{ route('ninjas.index') }}">All ninjas</a>
            <a href="{{ route('ninjas.create') }}">Create ninja</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>