<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ninja network</title>

    @vite('resources/css/app.css')
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

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