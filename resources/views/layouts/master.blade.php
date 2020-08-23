<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>KELAS ONLINE</title>
    <!-- Bootstrap Core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index-landingpage/landing-page.css" rel="stylesheet">
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
        <div class="topbar" id="top">
            <div class="header6">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-lg h6-nav-bar">
                        <a href="index.html" class="navbar-brand"><img src="images/logos/white-text.png" alt="wrapkit" /></a>
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
                                    <a class="nav-link" href="/kelas">
                                        KELAS
                                    </a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/contact">
                                        KONTAK
                                    </a>
                                </li>
                               
                            </ul>
                            <div class="act-buttons">
                                 <a href="/login" class="btn btn-danger-gradiant font-14">LOGIN</a>
                            </div>
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
                <!-- ============================================================== -->
                <!-- Static Slider 10  -->
                <!-- ============================================================== -->
                <div class="static-slider-head" style="background-image:url(images/landingpage/banner-bg.jpg)">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <!-- Column -->
                            <div class="col-lg-8 col-md-6 align-self-center text-center" data-aos="fade-up" data-aos-duration="1200">
                                <h1 class="title">@yield('jumbo-title')</h1>
                                <h4 class="subtitle font-light">@yield('jumbo-content')</h4> 
                                <a href="https://wrappixel.com/templates/wrapkit-lite/" class="btn btn-outline-light m-r-20 btn-md m-t-30 font-14">Download Free</a><a href="https://wrappixel.com/templates/wrapkit/" class="btn btn-md m-t-30 btn-danger-gradiant font-14">Upgrade To Pro</a>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Static Slider 10  -->
                <!-- ============================================================== -->

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
</body>

</html>