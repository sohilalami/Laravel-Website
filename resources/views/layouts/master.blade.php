<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://font.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <h2>
    @section('header')
        LARAVEL WEBSITE VAN SOHIL
    @show
    </h2>
    <img src="{{ asset('images/logo.png') }}" />
</header>

<nav>
   <ul>
       <li><a href="{{ route('homepage') }}">Home</a></li>
       <li><a href="{{ route('product.add') }}">Producten</a></li>
       <li><a href="{{ route('about-us') }}">About Us</a></li>
       <li><a href="{{ route('show-name', ['name' => 'henkie']) }}">Show a name</a></li>
   </ul>
</nav>

<main>
    @yield('content')
</main>

<footer>
    FOOTER
</footer>

</body>
</html>
