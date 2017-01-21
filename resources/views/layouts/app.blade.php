<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mdb.min.css') }}" rel="stylesheet">

    @if (Auth::guest())
    <style>
        body {
            background: url("http://mdbootstrap.com/images/regular/nature/img%20(73).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding-top: 10%;
        }
    </style>
    @endif


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="fixed-sn purple-skin" >


<!--Double Navigation-->
    <header>
    @if (Auth::user())
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="http://mdbootstrap.com/images/avatars/img%20(6)" class="img-fluid rounded-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text">{{ Auth::user()->name }}<br>{{ Auth::user()->email }}
                        </p>
                    </div>
                </div>
            </li>
            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-paint-brush"></i> Appearance<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Themes</a>
                                </li>
                                <li><a href="#" class="waves-effect">Customize</a>
                                </li>
                                <li><a href="#" class="waves-effect">Widgets</a>
                                </li>
                                <li><a href="#" class="waves-effect">Menus</a>
                                </li>
                                <li><a href="#" class="waves-effect">Theme settings</a>
                                </li>
                                <li><a href="#" class="waves-effect">Editor</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-paint-brush"></i> Plugins<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Installed plugins</a>
                                </li>
                                <li><a href="#" class="waves-effect">Add new</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Users<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">All users</a>
                                </li>
                                <li><a href="#" class="waves-effect">Your profile</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-area-chart"></i> SEO<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Social</a>
                                </li>
                                <li><a href="#" class="waves-effect">XML Sitemaps</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-wrench"></i> Tools<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Available tools</a>
                                </li>
                                <li><a href="#" class="waves-effect">Import</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-database"></i> Payments<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Products</a>
                                </li>
                                <li><a href="#" class="waves-effect">Orders</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->
        @endif
        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

            @if (Auth::user())
            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            @endif

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>{{ config('app.name', 'Laravel') }}</p>
            </div>


            <ul class="nav navbar-nav float-xs-right">
                @if (Auth::guest())
                    <!--<li class="nav-item ">
                        <a class="nav-link" href="{{ url('/login') }}" ><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Login</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/register') }}" ><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Register</span></a>
                    </li>-->
                @else
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-user"></i> <span class="hidden-sm-down">Account</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                @endif
            </ul>

        </nav>
        <!--/.Navbar-->

    </header>
    <!--/Double Navigation-->
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('/js/tether.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/mdb.min.js') }}"></script>

    <script>
        $(".button-collapse").sideNav();

        var el = document.querySelector('.custom-scrollbar');

        Ps.initialize(el);
    </script>
</body>
</html>
