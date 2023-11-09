<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Index</a></li>
            <li><a href="{{ route('contacts') }}">Contacts</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('main') }}">Main</a></li>
        </ul>
    </nav>
</div>
    @yield('content')
</body>
</html>
