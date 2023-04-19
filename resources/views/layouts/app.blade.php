<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel project - @yield('title')</title>
</head>
<body>
    <header>
        @guest
            <a href="{{ route('login') }}">Login</a>
        @else
        <a href="{{ route('logout') }}" id="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            logout ({{ auth()->user()->name }})
        </a>
            <form action="{{ route('logout') }}" method="post" id="logout-form">
                @csrf
            </form>
        @endguest
    </header>
    @yield('content')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>