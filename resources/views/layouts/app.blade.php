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
            @if(Auth::check())
                <div class="col-lg-3">
                    <ul class="list-group">
                        <li class="list-group-item"> <a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Dashboard</a></li>
                        <li class="list-group-item"> <a href="{{ route('post.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Create News</a></li>
                        <li class="list-group-item"> <a href="{{ route('project.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Create Project</a></li>
                        <li class="list-group-item"> <a href="{{ route('event.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Create Event</a></li>
                        <li class="list-group-item"> <a href="{{ route('campus.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Add Campus</a></li>
                        <li class="list-group-item"> <a href="{{ route('blog.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Create Blogpost</a></li>
                        <li class="list-group-item"> <a href="{{ route('blogs') }}"> <i class="fa fa-book" aria-hidden="true"></i> All Blogposts</a></li>
                        <li class="list-group-item"> <a href="{{ route('campuses') }}"> <i class="fa fa-book" aria-hidden="true"></i> Campus Clubs</a></li>
                        <li class="list-group-item"> <a href="{{ route('posts') }}"> <i class="fa fa-book" aria-hidden="true"></i> All News</a></li>
                        <li class="list-group-item"> <a href="{{ route('posts.trashed') }}"><i class="fa fa-trash" aria-hidden="true"></i> Trashed News</a></li>
                        <li class="list-group-item"> <a href="{{ route('blogs.trashed') }}"><i class="fa fa-trash" aria-hidden="true"></i> Trashed Blogposts</a></li>
                        <li class="list-group-item"> <a href="{{ route('events') }}"> <i class="fa fa-book" aria-hidden="true"></i> All Events</a></li>
                        <li class="list-group-item"> <a href="{{ route('projects') }}"> <i class="fa fa-book" aria-hidden="true"></i> All projects</a></li>
                        <li class="list-group-item"> <a href="{{ route('contacts') }}"> <i class="fa fa-book" aria-hidden="true"></i> All Contacts</a></li>
                        <li class="list-group-item"> <a href="{{ route('pilots') }}"> <i class="fa fa-book" aria-hidden="true"></i> FOSS PILOT</a></li>
                        @if(Auth::user()->admin)
                            <li class="list-group-item"> <a href="{{ route('contributor.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Add Contributors</a></li>
                            <li class="list-group-item"> <a href="{{ route('contributors') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Contributors</a></li>
                            <li class="list-group-item"> <a href="{{ route('users') }}"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
                            <li class="list-group-item"> <a href="{{ route('user.create') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> New User</a></li>
                        @endif
                        <li class="list-group-item"><a href="{{ route('user.profile') }}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> My profile</a></li>
                        @if(Auth::user()->admin)
                            <li class="list-group-item">
                                <a href="{{ route('settings') }}"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif
            <div class="col-lg-9">
                @yield('content')
            </div>
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
