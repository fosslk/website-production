<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Foss.lk | @yield('title')</title>
    <meta name="description" content=">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="https://foss.lk/forum/uploads/default/original/1X/b1bf3d75e852e13d9a38a163bb07909bdaa0d13d.png">
    <link rel="apple-touch-icon" type="image/png" href="https://foss.lk/forum/uploads/default/original/1X/d2ce5eb7129679bd13d6b4bc1a2623420cf37b24.jpg">
    <link rel="icon" type="image/png" sizes="144x144" href="https://foss.lk/forum/uploads/default/original/1X/d2ce5eb7129679bd13d6b4bc1a2623420cf37b24.jpg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/assets/css/preload.min.css">
    <link rel="stylesheet" href="/assets/css/plugins.min.css">
    <link rel="stylesheet" href="/assets/css/style.light-blue-500.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- Facebook sharing meta data -->
    <meta property="og:url" content="http://www.foss.lk" />
    <meta property="og:type" content="FOSS Sri lanka" />
    <meta property="og:title" content="Free And Open Source Software Community" />
    <meta property="og:description" content="FOSS.LK was established on 2007 by group of enthusiasts, to raise awarness about Free and Open Source Software. Over the years foss.lk has worked with several organizations and conducted events with the help from the community." />
    <meta property="og:image" content="https://foss.lk/forum/uploads/default/original/1X/b1bf3d75e852e13d9a38a163bb07909bdaa0d13d.png" />
    <!-- Twitter sharing meta data -->
    <meta name="twitter:card" content="FOSS Sri lanka">
    <meta name="twitter:url" content="http://www.foss.lk">
    <meta name="twitter:title" content="Free And Open Source Software Community | FOSS">
    <meta name="twitter:description" content="FOSS.LK was established on 2007 by group of enthusiasts, to raise awarness about Free and Open Source Software. Over the years foss.lk has worked with several organizations and conducted events with the help from the community.">
    <meta name="twitter:image" content="https://foss.lk/forum/uploads/default/original/1X/b1bf3d75e852e13d9a38a163bb07909bdaa0d13d.png">

    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<div class="ms-site-container">
    <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white navbar-mode">
        <div class="container container-full">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/assets/logo/nav-logo.png" width="160" style="padding-top: 5px;" alt="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="ms-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('class1')">
                        <a href="/">Home
                        </a>
                    </li>

                    <li class="nav-item @yield('class4')">
                        <a href="/foss-pilot" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" role="button" aria-haspopup="true" aria-expanded="false" data-name="foss-pilot">FOSS Pilot</a>

                    </li>

                    <li class="nav-item dropdown @yield('class2')">
                        <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="community">Community
                       
                         <i class="zmdi zmdi-chevron-down"></i>
                            <div class="ripple-container"></div></a>
                        <ul class="dropdown-menu">
                           
                            <li>
                                <a class="dropdown-item" href="https://foss.lk/forum/">Forum</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/blog">Blog</a>
                            </li>
                             <li>
                                <a class="dropdown-item" href="/campus-clubs">Campus</a>
                            </li>
                             <li>
                                <a class="dropdown-item" href="/consultant">Consultant</a>
                            </li>
                             <li>
                                <a class="dropdown-item" href="/events">Events</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/news">News</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/projects">Projects</a>
                            </li>
                            
                        </ul>

                    </li>
                    <li class="nav-item @yield('class3')">
                        <a href="/top-contributors" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" role="button" aria-haspopup="true" aria-expanded="false" data-name="top-contributors">Top Contributors
                        </a>

                    </li>

                     <li class="nav-item @yield('class7')">
                        <a href="/about" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" role="button" aria-haspopup="true" aria-expanded="false" data-name="about">About

                        </a>

                    </li>

                     <li class="nav-item @yield('class6')">
                        <a href="/contact" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" role="button" aria-haspopup="true" aria-expanded="false" data-name="contact">Contact Us
                        </a>

                    </li>
                    
                </ul>
            </div>
            <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </div>
        <!-- container -->
    </nav>



@yield('content')

<!-- container -->
    @include('layouts.includes.footer')
    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>
</div>
<!-- ms-site-container -->
<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
    <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">

            
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li>
                <a data-scroll class="link" href="/">
                    <i class="zmdi zmdi-home"></i> Home</a>
            </li>

            <li>
                <a data-scroll class="link" href="/foss-pilot">
                    <i class="mr-2 fa fa-user-circle"></i> FOSS Pilot</a>
            </li>

            <li class="card" role="tab" id="sch5">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc5" aria-expanded="false" aria-controls="sc5">
                    <i class="mr-2 fa fa-slack"></i> Community</a>
                <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5" data-parent="#slidebar-menu">
                    <li>
                        <a href="https://foss.lk/forum/">Forum</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/campus-clubs">Campus</a>
                    </li>
                    <li>
                        <a href="/consultant">Consultant</a>
                    </li>
                    <li>
                        <a href="/events">Events</a>
                    </li>

                    <li>
                        <a href="/news">News</a>
                    </li>

                    <li>
                        <a href="/projects">Projects</a>
                    </li>
                </ul>
            </li>


            <li>
                <a data-scroll class="link" href="/top-contributors">
                    <i class="mr-2 fa fa-universal-access"></i> Top Contributors</a>
            </li>

            <li>
                <a data-scroll class="link" href="/about">
                    <i class="mr-2 fa fa-linux"></i> About</a>
            </li>

            <li>
                <a data-scroll class="link" href="/contact">
                    <i class="mr-1 zmdi zmdi-email zmdi-hc-fw"></i> Contact us</a>
            </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
            <h4 class="ms-slidebar-block-title">Social Links</h4>
            <div class="ms-slidebar-social">
                <a href="https://www.facebook.com/foss.lk/" class="btn-circle btn-circle-raised btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="https://twitter.com/foss_lk" class="btn-circle btn-circle-raised btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="https://github.com/fosslk" class="btn-circle btn-circle-raised btn-github">
                    <i class="zmdi zmdi-github"></i>
                    <div class="ripple-container"></div>
                </a>

            </div>
        </div>
    </div>
</div>
<script src="/assets/js/plugins.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/home-generic-6.js"></script>
<script src="/assets/js/index.js"></script>
</body>
</html>