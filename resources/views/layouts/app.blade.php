<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('La_ruleta') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .Green{color:Green;}
        .red{color:red;}
        .Black{color:Black;}

        thead,
        tfoot,
        nav {
            background-color: #6b8597c5;
            color: #fff;
        }
        nav a{
            font-size:20px;
            color:white;
        }
    </style>
</head>
<body>       
    <div id="app">
        
        <nav class="navbar navbar-expand-md shadow-responsive-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ('Inicio') }}
                </a>
                <a class="navbar-brand" href="{{ url('/info') }}">
                    {{ ('Acerca de') }}
                </a>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>




