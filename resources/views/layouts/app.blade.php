<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!--Datatables css -->            
    <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap4.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.bootstrap4.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/rowReorder.bootstrap4.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/colReorder.bootstrap4.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/scroller.bootstrap4.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/datatables_custom.css')}}">
    <!-- Sweetalert css -->            
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
    
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-chat-panel shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Chat Panel
                </a>
                <button class="btn-toggle" onclick="toggled(this)" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- Area Script --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/dataTables.bootstrap4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/dataTables.rowReorder.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/dataTables.scroller.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/select2/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
