<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — TugasWeb P9</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            color: #333;
        }
        nav {
            background: #ef4444;
            padding: 12px 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        nav a.active {
            text-decoration: underline;
        }
        .container {
            max-width: 720px;
            margin: 30px auto;
            background: #fff;
            padding: 20px 25px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            margin-top: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        footer {
            text-align: center;
            font-size: 13px;
            color: #888;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>&copy; {{ date('Y') }} TugasWeb-P9-LaravelSetup</footer>
</body>
</html>
