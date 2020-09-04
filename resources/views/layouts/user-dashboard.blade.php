<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon.png') }}">
    <title>KELAS ONLINE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/landing-page.css') }}" rel="stylesheet">
    
    {{-- mi css --}}
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <div class="topbar" id="top"  style="background-image:url({{ URL::asset('images/landingpage/banner-bg.jpg') }});">
            <div class="header6">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-lg h6-nav-bar">
                        <a href="/" class="navbar-brand"><img src="{{ URL::asset('images/logos/white-text.png') }}" alt="wrapkit" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h6-info" aria-controls="h6-info" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="h6-info">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/">
                                        BERANDA
                                    </a>
                                </li>
                                
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/about">
                                        TENTANG
                                    </a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/lihatkelas">
                                        KELAS
                                    </a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/contact">
                                        KONTAK
                                    </a>
                                </li>
                               
                            </ul>
                            {{-- <div class="act-buttons">
                                 <a href="/login" class="btn btn-danger-gradiant font-14">LOGIN</a>
                            </div> --}}

                            @guest
                            <div class="nav-item act-buttons">
                                <a class="nav-link btn btn-success-gradiant font-14" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            {{-- @if (Route::has('register'))
                                <div class="nav-item act-buttons">
                                    <a class="nav-link btn btn-danger-gradiant font-14" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif --}}
                            @else
                                
                                <div class="nav-item dropdown act-buttons" style="text-transform:uppercase">
                                    <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="nav-link text-dark" href="/user">
                                            PROFILE
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Back to top -->
            <!-- ============================================================== -->
            <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer4 b-t spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20">Address</h5>
                        <p>71 Amsteroum Avenue Cronish Night, NY 35098</p>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20">Phone</h5>
                        <p>Reception :  +205 123 4567 <br/>Office :  +207 235 7890</p>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20">Email</h5>
                        <p>Office :  <a href="#" class="link">info@wrappixel.com</a> <br/>Site :  <a href="#" class="link">wrapkit@wrappixel.com</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="m-b-20">Social</h5>
                        <div class="round-social light">
                            <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="link"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="link"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="link"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="f4-bottom-bar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex font-14">
                                <div class="m-t-10 m-b-10 copyright">All Rights Reserved by WrapPixel.</div>
                                <div class="links ml-auto m-t-10 m-b-10">
                                    <a href="#" class="p-10 p-l-0">Terms of Use</a>
                                    <a href="#" class="p-10">Legal Disclaimer</a>
                                    <a href="#" class="p-10">Privacy Policy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="node_modules/popper/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        
        $('a').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 90
            }, 1000);
            event.preventDefault();
            // code 
            
        });
    </script>

    @yield('script')
</body>

</html>