<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('seguce92.base.app_description') }}">
    <meta name="author" content="{{ config('seguce92.base.developer_name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/elite/plugins/images/favicon.png') }}">

    <title>{{ config('seguce92.base.app_title') }}@yield('title')</title>

    @yield('before_style')
    {!! Html::style('vendor/seguce92/elite/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('vendor/seguce92/elite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') !!}
    {!! Html::style('vendor/seguce92/elite/css/animate.min.css') !!}
    {!! Html::style('vendor/seguce92/elite/css/style.min.css') !!}
    {!! Html::style('vendor/seguce92/elite/css/colors/'.config('seguce92.elite.color').'.min.css') !!}
    {!! Html::style('vendor/seguce92/elite/font-awesome/css/font-awesome.min.css') !!}
    @yield('after_style')
</head>

<body class="{{ config('seguce92.elite.fix-sidebar') }} {{ config('seguce92.elite.fix-header') }}">
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <!-- Logo -->
            <div class="top-left-part">
                <a class="logo" href="{{ url('/') }}">
                    <!-- Logo icon image, you can use font-icon also -->
                    <b>{{ config('seguce92.elite.sidebar_short_title') }}</b>
                    <!-- Logo text image you can use text also -->
                    <span class="hidden-xs" style="text-transform: capitalize">{{ config('seguce92.elite.sidebar_long_title') }}</span> </a>
            </div>
            <!-- /Logo -->
            <!-- This is for mobile view search and menu icon -->
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Buscar..." class="form-control">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <!-- This is the message dropdown -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                        <img src="{{ Gravatar::fallback(asset('vendor/seguce92/elite/plugins/images/users/varun.jpg'))->get(Auth::user()->email) }}" width="36" class="img-circle">
                        <b class="hidden-xs">{{ Auth::user()->username }}</b>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li><a href="{{ url('profile') }}"><i class="ti-user"></i> Mi Perfil</a></li>
                        <li><a href="{{ url('setting') }}"><i class="ti-settings"></i> Configurar</a></li>
                        <li><a href="#" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Cerrar Sesion</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                @include('elite::inc.menu')
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">@yield('page-title', 'Escritorio')</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        @yield('breadcrumb')
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; Developed by <a href="{{ config('seguce92.base.developer_link') }}">{{ config('seguce92.base.developer_name') }}</a> </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
@yield('before_script')
{!! Html::script('vendor/seguce92/elite/plugins/bower_components/jquery/dist/jquery.min.js') !!}
{!! Html::script('vendor/seguce92/elite/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('vendor/seguce92/elite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}
{!! Html::script('vendor/seguce92/elite/js/jquery.slimscroll.min.js') !!}
{!! Html::script('vendor/seguce92/elite/js/waves.min.js') !!}
{!! Html::script('vendor/seguce92/elite/js/custom.min.js') !!}
{!! Html::script('vendor/seguce92/elite/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}
@yield('after_script')
</body>
</html>