<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">

<!-- Mirrored from carzone.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2019 07:15:24 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="{{url('images/favicon.ico')}}" type="image/x-icon" />
<!-- Page Title Here -->
<title>CarZone</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{url('css/plugins.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/templete.min.css')}}">
<link class="skin" rel="stylesheet" type="text/css" href="{{url('css/skin/skin-1.css')}}">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="{{url('plugins/revolution/v5.4.3/css/settings.css')}}">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="{{url('plugins/revolution/v5.4.3/css/navigation.css')}}">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
</head>
<body id="bg">

<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header header-transparent">
        
        <!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="{{url('/index')}}"><img src="images/logo-light.png" class="logo" alt=""></a>
                    </div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">   
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('/index')}}">Home<i class="fa fa-chevron-down" style="color: #0d1e47;"></i></a>
                            </li>
                            
                            <li class="has-mega-menu "> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">Page</a>
                                        <ul>
                                            <li><a href="page-about.html">About Us</a></li>
                                            <li><a href="page-career.html">Career</a></li>
                                            <li><a href="page-services.html">Services</a></li>
                                            <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Page</a>
                                        <ul>
                                            <li><a href="page-help.html">Help</a></li>
                                            <li><a href="page-faq.html">Faq's</a></li>
                                            <li><a href="page-error-404.html">404 Page</a></li>
                                            <li><a href="page-contact.html">Contact 1</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Blog Page</a>
                                        <ul>
                                            <li><a href="blog-grid-2.html">Grid 2</a></li>
                                            <li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
                                            <li><a href="blog-grid-3.html">Grid 3</a></li>
                                            <li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Blog Page</a>
                                        <ul>
                                            <li><a href="blog-single.html">Single</a></li>
                                            <li><a href="blog-single-sidebar.html">Single sidebar</a></li>
                                            <li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
                                            <li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @if(Auth::check() && Auth::user()->role == 'vendor')
                                <button class="has-mega-menu" style="margin-top: 25px;"><a href="{{url('/logout')}}">Logout</a>
                                </button>
                                <button class="has-mega-menu" style="margin-top: 25px;"><a href="{{url('/vendor-dashboard')}}">Dashboard</a>
                                </button>
                            @elseif(Auth::check() && Auth::user()->role == 'customer')
                                <button class="has-mega-menu" style="margin-top: 25px;"><a href="{{url('/logout')}}">Logout</a>
                                </button>
                                <button class="has-mega-menu" style="margin-top: 25px;"><a href="{{url('/user-dashboard')}}">Dashboard</a>
                                </button>
                            @else
                                <button class="has-mega-menu" style="margin-top: 25px;"><a href="{{url('/login-form')}}">Login</a>
                                </button>
                                <button class="has-mega-menu" style="margin-top: 25px;"><a href="{{url('/register-from')}}">Register</a>
                                </button>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->