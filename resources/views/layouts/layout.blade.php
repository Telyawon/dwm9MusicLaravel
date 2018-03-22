<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/stock">All Products</a></li>
            <li><a href="/insertStock">Add a product</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        2018 - Copyright Clément FAIDUTTI
    </footer>
</body>
</html>