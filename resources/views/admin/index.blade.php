<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>KELAS ONLINE</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ URL::asset('admin_assets/images/favicon.ico') }} ">

        <!-- morris css -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="{{ URL::asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('admin_assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('admin_assets/css/style.css') }}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        {{-- <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div> --}}

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        
                        <a href="index.html" class="logo"><img src="assets/images/logo_dark.png" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Elements </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-spinner.html">Spinner</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> Advanced UI </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="advanced-alertify.html">Alertify</a></li>
                                    <li><a href="advanced-rating.html">Rating</a></li>
                                    <li><a href="advanced-nestable.html">Nestable</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span> Icons </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms </span> <span class="badge badge-warning badge-pill float-right">8</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Charts </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Chart</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Tables </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps </span> <span class="badge badge-danger badge-pill float-right">2</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> Pages </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-medical"></i><span> Extras </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-faqs.html">FAQs</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming Soon</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                <a href="index.html" class="logo"><img src="{{URL::asset('images/logos/white-text.png')}}" height="22" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                             <!-- Search input -->
                             <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <div class="slimscroll-noti">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                                <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                        </div>
                                        

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>
    

                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ URL::asset('storage/user') }}/{{ Auth::user()->foto }}" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        Create New <i class="mdi mdi-plus"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                                <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                    <a href="#" class="nav-link waves-effect">
                                        Activity
                                    </a>
                                </li>

                            </ul>


                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">Dashboard</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings mr-1"></i> Settings
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div> 
                            <!-- end page title -->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                                                <h4 class="mb-3 mt-0 float-right">1,587</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">Last : 1447</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                                                <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">Last : $47,596</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-pink mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Average Price</h6>
                                                <h4 class="mb-3 mt-0 float-right">15.9</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">Last : 15.8</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                                                <h4 class="mb-3 mt-0 float-right">1890</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">Last : 1776</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- end row -->
            
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Sales Report</h4>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div id="morris-line-example" class="morris-chart" style="height: 300px"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div>
                                                        <h5 class="font-14 mb-5">Yearly Sales Report</h5>
            
                                                        <div>
                                                            <h5 class="mb-3">2018 : $19523</h5>
                                                            <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis atque quos dolores et</p>
                                                            <a href="#" class="btn btn-primary btn-sm">Read more <i class="mdi mdi-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Sales Analytics</h4>
                                            <div id="morris-donut-example" class="morris-chart" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
            
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
                                            <div class="latest-massage">
                                                <a href="#" class="latest-message-list">
                                                    <div class="border-bottom position-relative">
                                                        <div class="float-left user mr-3">
                                                            <h5 class="bg-primary text-center rounded-circle text-white mt-0">v</h5>
                                                        </div>
                                                        <div class="message-time">
                                                            <p class="m-0 text-muted">Just Now</p>
                                                        </div>
                                                        <div class="massage-desc">
                                                            <h5 class="font-14 mt-0 text-dark">Victor Zamora</h5>
                                                            <p class="text-muted">Hey! there I'm available...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="latest-message-list">
                                                    <div class="border-bottom mt-3 position-relative">
                                                        <div class="float-left user mr-3">
                                                            <h5 class="bg-success text-center rounded-circle text-white mt-0">p</h5>
                                                        </div>
                                                        <div class="message-time">
                                                            <p class="m-0 text-muted">2 Min. ago</p>
                                                        </div>
                                                        <div class="massage-desc">
                                                            <h5 class="font-14 mt-0 text-dark">Patrick Beeler</h5>
                                                            <p class="text-muted">I've finished it! See you so...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="latest-message-list">
                                                    <div class="border-bottom mt-3 position-relative">
                                                        <div class="float-left user mr-3">
                                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle mb-3">
                                                        </div>
                                                        <div class="message-time">
                                                            <p class="m-0 text-muted">6 Min. ago</p>
                                                        </div>
                                                        <div class="massage-desc">
                                                            <h5 class="font-14 mt-0 text-dark">Ralph Ramirez</h5>
                                                            <p class="text-muted">This theme is awesome!</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="latest-message-list">
                                                    <div class="border-bottom mt-3 position-relative">
                                                        <div class="float-left user mr-3">
                                                            <h5 class="bg-pink text-center rounded-circle text-white mt-0">b</h5>
                                                        </div>
                                                        <div class="message-time">
                                                            <p class="m-0 text-muted">01:34 pm</p>
                                                        </div>
                                                        <div class="massage-desc">
                                                            <h5 class="font-14 mt-0 text-dark">Bryan Lacy</h5>
                                                            <p class="text-muted">I've finished it! See you so...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="latest-message-list">
                                                    <div class="mt-3 position-relative">
                                                        <div class="float-left user mr-3">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle mb-3">
                                                        </div>
                                                        <div class="message-time">
                                                            <p class="m-0 text-muted">02:05 pm</p>
                                                        </div>
                                                        <div class="massage-desc">
                                                            <h5 class="font-14 mt-0 text-dark">James Sorrells</h5>
                                                            <p class="text-muted">Hey! there I'm available...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
            
                                        </div>
                                    </div>
            
                                </div>
                                <!-- end col -->
            
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                                            <ol class="activity-feed mb-0">
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Jan 10</span>
                                                        <span class="activity-text text-white">Responded to need “Volunteer Activities”</span>
                                                    </div>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Jan 09</span>
                                                        <span class="activity-text text-white">Added an interest “Volunteer Activities”</span>
                                                    </div>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Jan 08</span>
                                                        <span class="activity-text text-white">Joined the group “Boardsmanship Forum”</span>
                                                    </div>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Jan 07</span>
                                                        <span class="activity-text text-white">Responded to need “In-Kind Opportunity”</span>
                                                    </div>
                                                </li>
                                            </ol>
            
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
            
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Social Source</h4>
                                            <div class="text-center">
                                                <div class="social-source-icon lg-icon mb-3">
                                                    <i class="mdi mdi-facebook h2 bg-primary text-white"></i>
                                                </div>
                                                <h5 class="font-16"><a href="#" class="text-dark">Facebook - <span class="text-muted">125 sales</span> </a></h5>
                                                <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis tincidunt.</p>
                                                <a href="#" class="text-primary font-14">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-4">
                                                    <div class="social-source text-center mt-3">
                                                        <div class="social-source-icon mb-2">
                                                            <i class="mdi mdi-facebook h5 bg-primary text-white"></i>
                                                        </div>
                                                        <p class="font-14 text-muted mb-2">125 sales</p>
                                                        <h6>Facebook</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="social-source text-center mt-3">
                                                        <div class="social-source-icon mb-2">
                                                            <i class="mdi mdi-twitter h5 bg-info text-white"></i>
                                                        </div>
                                                        <p class="font-14 text-muted mb-2">112 sales</p>
                                                        <h6>Twitter</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="social-source text-center mt-3">
                                                        <div class="social-source-icon mb-2">
                                                            <i class="mdi mdi-instagram h5 bg-pink text-white"></i>
                                                        </div>
                                                        <p class="font-14 text-muted mb-2">104 sales</p>
                                                        <h6>Instagram</h6>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
            
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID No.</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#14567</th>
                                                            <td>Michael Mitchell</td>
                                                            <td>14 Jan</td>
                                                            <td>$74</td>
                                                            <td>2</td>
                                                            <td>
                                                                <div class="progress" style="height: 5px;">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>$148</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14568</th>
                                                            <td>Dennis Cervantes</td>
                                                            <td>15 Jan</td>
                                                            <td>$72</td>
                                                            <td>2</td>
                                                            <td>
                                                                <div class="progress" style="height: 5px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>$144</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14569</th>
                                                            <td>Bernard Moats</td>
                                                            <td>16 Jan</td>
                                                            <td>$86</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="progress" style="height: 5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>$86</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14570</th>
                                                            <td>Patrick Esquivel</td>
                                                            <td>17 Jan</td>
                                                            <td>$59</td>
                                                            <td>2</td>
                                                            <td>
                                                                <div class="progress" style="height: 5px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>$118</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14571</th>
                                                            <td>Michael Barger</td>
                                                            <td>18 Jan</td>
                                                            <td>$62</td>
                                                            <td>2</td>
                                                            <td>
                                                                <div class="progress" style="height: 5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>$124</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Document files</h4>
                                            <table class="table table-striped mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                                        <td>
                                                            <h6 class="mt-0">2015</h6>
                                                            <p class="text-muted mb-0">dolor sit amet</p></td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                                        <td>
                                                            <h6 class="mt-0">2016</h6>
                                                            <p class="text-muted mb-0">dolor sit amet</p></td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                                        <td>
                                                            <h6 class="mt-0">2017</h6>
                                                            <p class="text-muted mb-0">pretium quis</p></td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                                        <td>
                                                            <h6 class="mt-0">2018</h6>
                                                            <p class="text-muted mb-0">ultricies nec</p></td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!-- end row -->

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 - 2020 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        {{-- <script src="{{ asset(' admin_assets/js/jquery.min.js ') }} "></script> --}}
        <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src="{{ asset('node_modules/popper/dist/popper.min.js') }}"></script>
        <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        {{-- <script src="{{ asset(' admin_assets/js/bootstrap.bundle.min.js ') }} "></script> --}}
        <script src="{{ asset(' admin_assets/js/modernizr.min.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/detect.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/fastclick.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/jquery.slimscroll.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/jquery.blockUI.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/waves.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/jquery.nicescroll.js ') }} "></script>
        <script src="{{ asset(' admin_assets/js/jquery.scrollTo.min.js ') }}"></script>

        {{-- <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script> --}}

        <!-- dashboard js -->
        <script src="{{ asset(' admin_assets/pages/dashboard.int.js ') }} "></script>        

        <!-- App js -->
        <script src="{{ asset(' admin_assets/js/app.js ') }} "></script>

    </body>
</html>