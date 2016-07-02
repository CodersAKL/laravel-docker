<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @if ( Config::get('app.debug') )
        <!-- build:css(public) css/styles.min.css -->
        <!-- bower:css -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap-select-sass/dist/css/bootstrap-select.css') }}" />
        <!-- endbower -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- endbuild -->
    @else
        <link rel="stylesheet" href="{{ elixir("css/styles.min.css") }}">
    @endif

</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    @if ( Config::get('app.debug') )
        <!-- build:js(public) js/scripts.min.js -->
        <!-- bower:js -->
        <script src="{{ asset('/assets/vendor/jquery/dist/jquery.js') }}"></script>
        <script src="{{ asset('/assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.js') }}"></script>
        <script src="{{ asset('/assets/vendor/bootstrap-select-sass/dist/js/bootstrap-select.js') }}"></script>
        <!-- endbower -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- endbuild -->
    @else
        <script src="{{ elixir('js/scripts.min.js') }}"></script>
    @endif
</body>
</html>
