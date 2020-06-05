<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #36363685; height: 150px">
                <a style="color:white" class="navbar-brand" href="{{ url('/') }}">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="nav collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="container navbar-nav mr-auto">
                        <li class="nav-item btn_menu">
                            <a class="nav-link active" href="{{ url('/') }}">Prestations <span class="sr-only">(current)</span><img src="{{asset('images/iconPrestation.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                        </li>
                        <li class="nav-item btn_menu">
                            <a class="nav-link" href="{{ url('/') }}">Realisations <span class="sr-only">(current)</span><img src="{{asset('images/iconRealisation.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                        </li>
                        <li style="z-index:1" class="nav-item logo">
                            <a class="nav-link" href="{{ url('/') }}"><img style="width: 100%" src="{{asset('images/logo.png')}}" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                        </li>                    
                        <li class="nav-item btn_menu">
                            <a class="nav-link" href="{{ url('/') }}">Showrooms <span class="sr-only">(current)</span><img src="{{asset('images/iconShowroom.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                        </li>
                        <li class="nav-item btn_menu">
                            <a class="nav-link" href="{{ url('/') }}">Contact <span class="sr-only">(current)</span><img src="{{asset('images/iconContact.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                        </li>


                        <li class="top-right nav-item" style="margin:1%">
                        @auth
                            <a class="nav-link" href="{{ url('/home') }}">Profile <span class="sr-only">(current)</span></a>
                        @else
                            <div class="top-right links">    
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a  href="{{ route('register') }}">Register</a>
                                @endif
                            </div>                 
                        @endauth
                        </li>

                    </ul>
                </div>
            </nav>

        <main>
            @yield('content')
        </main>
        <footer>
            <div id="footertxt">
                <p><a target="_blank" href="http://www.webcake.fr">Création</a> / <a target="_blank" href="http://www.pluscom.fr">&nbsp;&nbsp;&nbsp;PlusCom&nbsp;&nbsp;&nbsp;</a>  
                / <a target="_blank" href="http://www.a2mi-informatique.fr">&nbsp;&nbsp;&nbsp;A2MI</a>
                <br><br>
                <a href="plombier-chauffagiste-la-rochelle-mentions-legales.html">Mentions légales</a></p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>