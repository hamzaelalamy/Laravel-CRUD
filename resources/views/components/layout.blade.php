<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Network</title>

    @vite('resources/css/app.css')
<body>
    @if(session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{session('success')}}
        </div>
    @endif
    <header>
        <nav>
            <h1>Users Network</h1>
            <a href="{{ route('users.index')}}">All users</a>
            <a href="{{route('users.create')}}">Create New user</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot}}
    </main>
</body>
</html>