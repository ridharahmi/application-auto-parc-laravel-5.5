<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <span>A</span>uto <span> Parc </span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (!Auth::guest())
                        <li><a href="{{ url('/GestionVehicules') }}"> Vehicules</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"
                               aria-haspopup="true" v-pre>
                                Ressources humaines <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/GestionChauffeur') }}">Chauffeurs</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/GestionFournisseur') }}">Fournisseurs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"
                               aria-haspopup="true" v-pre>
                                Autres <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/GestionMission') }}">Missions </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/GestionMaintenance') }}">Maintenances </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/GestionSinistre') }}">Sinistre </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/GestionPapier') }}">Papier </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/GestionStatistique') }}">Statistique <span
                                        class="badge stat"> ? </span></a></li>
                        <li><a href="{{ url('/Alert') }}"> Alert <span class="badge"> ! </span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"
                               aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="home">Accuiel</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="">{{ Auth::user()->email }}</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-4">
                    <ul>
                        <li><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="http://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12">
                    © 2018 -Powered by <a href="" style="color: red;">Ghozzi Marwen</a>
                </div>
                {{--<marquee>© 2018 -Powered by <a href=""></a>Ghozzi Marwen</marquee>--}}
            </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modele.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>

</body>
</html>
