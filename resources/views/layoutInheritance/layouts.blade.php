{{--
    In this file, we cna keep a template that we can then later inherit in other blade.php
    files to reuse the code.

    Use Cases
        1. Navbars
            ...etc
--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            background-color: #fff;
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100%;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Laravel</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=@yield('h')><a href="/products/homepage">Home</a></li>
                <li class=@yield('p')><a href="/products/productspage">Products</a></li>
                <li class=@yield('a')><a href="/products/aboutpage">About Us</a></li>
                <li class=@yield('c')><a href="/products/contactpage">Contact Us</a></li>

            </ul>
        </div>
    </nav>
    <div class="flex-center position-ref full-height" style="background-color: beige">
        @yield('content')
    </div>
</body>

</html>
