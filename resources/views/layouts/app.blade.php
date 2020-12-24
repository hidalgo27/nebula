<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="agency, business, corporate, creative, freelancer, interior, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />
    <meta name="description" content="ajax portfolio one page" />
    <meta name="author" content="cosmos-themes" />

    <!--PAGE TITLE-->
    <title>Nebula</title>

    <link rel="icon" type="image/ico" href="images/favicon.ico" />

    <!--Plugins Css-->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!--Main Style Css-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Modernizr Js-->
    <script src="{{asset('js/modernizr.js')}}"></script>

</head>
<body class="smooth-scroll">

<!--PRELOADER START-->
<div class="preloader">
    <div class="loader-wrap">
        <div class="loader">
            <div class="loader-percent"></div>
        </div>
        <div id="percent">0%</div>
    </div>
</div>
<!--PRELOADER END-->

<!--MAIN START-->
<div id="main">

    <div class="ct-main-content ct-index">

        <!--HEADER START-->
        <header>
            <div class="logo-container">
                <a href="index.html" id="logo" class="cursor-link" data-type="page-transition">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>

            <div class="menu-burger">
                <div class="parallax-wrap burger-wrap">
                    <div class="parallax-icon">
                        <div class="burger-box">
                            <div class="burger-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="burger-text">
                    <div class="text-menu">MENU</div>
                    <div class="text-open">OPEN</div>
                    <div class="text-close">CLOSE</div>
                </div>
            </div>

        </header>
        <!--HEADER END-->

        <!--MENU OVERLAY START-->
        <div id="menu-overlay">
            <div class="container">
                <div class="content-wrapper">
                    <nav class="primary-nav">
                        <ul>
                            <li><a href="index.html" class="menu-link cursor-link" data-type="page-transition">Index</a></li>
                            <li><a href="about.html" class="menu-link cursor-link" data-type="page-transition">About</a></li>
                            <li><a href="contact.html" class="menu-link cursor-link" data-type="page-transition">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="company-info">
                        <a href="#" class="info-email link-underline cursor-link">hello@example.com</a><br>
                        <a href="#" class="info-tel link-underline cursor-link">(222) 123-4567</a>
                        <div class="info-address">
                            <p>121 King St, Melbourne VIC 3000, Australia.</p>
                        </div>
                        <ul class="sm-links">
                            <li><a href="#" class="cursor-link"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="cursor-link"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" class="cursor-link"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="cursor-link"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--MENU OVERLAY END-->



        <!--PAGE CONTENT START-->
        @yield('content')
        <!--PAGE CONTENT END-->

    </div>
</div>
<!--MAIN END-->

<!--AJAX PRELOADER START-->
<div class="ajax-preloader">
    <div class="loading"></div>
</div>
<!--AJAX PRELOADER END-->

<!--CUSTOM CURSOR START-->
<div id="custom-cursor">
    <div id="cursor-outer">
        <div id="cursor-loading"></div>
    </div>

    <div id="cursor-inner"></div>
</div>
<!--CUSTOM CURSOR END-->

<!--Jquery JS-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!--Plugins JS-->
<script src="{{asset('js/plugins.min.js')}}"></script>
<!--Google Map Api-->
<script src="https://maps.googleapis.com/maps/api/js?key={Your-API-KEY}"></script>
<!--Site Main JS-->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
