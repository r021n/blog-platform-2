<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <div>
            <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
        </div>
        <div>
            <span>{{ auth()->user()->name }}</span>
            <a href="{{ url('/') }}">View Blog</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <aside>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Tags</a></li>
            <li><a href="#">Comments</a></li>
        </ul>
    </aside>

    <main>
        @if (session('success'))
        <div>{{ session('success') }}</div>
        @endif

        @if (session('error'))
        <div>{{ session('error') }}</div>
        @endif

        @yield('content')
    </main>
</body>

</html>