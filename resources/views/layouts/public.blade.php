<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Platform')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <div>
            <a href="{{ url('/') }}">Blog Platform</a>
        </div>
        <div>
            @auth
            <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }} Blog Platform</footer>
</body>

</html>