<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="https://foss.lk/forum/uploads/default/original/1X/b1bf3d75e852e13d9a38a163bb07909bdaa0d13d.png">
    <link rel="apple-touch-icon" type="image/png" href="https://foss.lk/forum/uploads/default/original/1X/d2ce5eb7129679bd13d6b4bc1a2623420cf37b24.jpg">
    <link rel="icon" type="image/png" sizes="144x144" href="https://foss.lk/forum/uploads/default/original/1X/d2ce5eb7129679bd13d6b4bc1a2623420cf37b24.jpg">

    <title>FOSS.LK | Administrator</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('/css/toastr.min.css')}}" rel="stylesheet">
    @yield('styles')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
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
                    <img src="/assets/logo/nav-logo.png" width="150px">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li><img src="{{ asset(Auth::user()->profile->avatar) }}" alt="" width="50px" height="50px" style="border-radius: 50%;"></li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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


    <div class="container">
        <div class="row">

                @yield('content')
        </div>
    </div>

</div>
<div class="footer text-center">
    Developed By Programmer.lk<br>
    Contact Me If There Is any Problem - devsrilanka.lk@gmail.com // Call us - 077 96 17 143 (Tharindu Chathuranga)
</div>
<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif

    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}")
    @endif
</script>
@yield('scripts')
</body>
</html>
