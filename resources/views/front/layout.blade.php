<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Binduz - News Magazine Html Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">


</head>

<body class="gray-bg bg-2">

    <!--====== OFFCANVAS MENU PART START ======-->

    <div class="binduz-er-news-off_canvars_overlay"></div>
    <div class="binduz-er-news-offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="binduz-er-news-offcanvas_menu_wrapper">
                        <div class="binduz-er-news-canvas_close">
                            <a href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="binduz-er-news-header-social">
                            <ul class="text-center">
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Skype</a></li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="binduz-er-news-offcanvas_main_menu">
                                <li class="binduz-er-news-menu-item-has-children binduz-er-news-active">
                                    <a href="#">Home</a>
                                    <ul class="binduz-er-news-sub-menu">
                                        <li><a href="index.html">Home 1</a></li>

                                    </ul>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="archived.html">Archived </a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="author.html">Author</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#"> Categorise</a>
                                    <ul class="binduz-er-news-sub-menu">
                                        {{-- @foreach ($category as $categorise) --}}
                                        {{-- <li><a href="blog-details-1.html">{{ $categorise->title }}</a></li> --}}
                                        {{-- @endforeach --}}
                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                    </ul>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="about-us.html"> About</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="contact.html"> Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="binduz-er-news-offcanvas_footer">
                            <div class="binduz-er-news-logo text-center mb-30 mt-30">
                                <a href="index.html">
                                    <img src="{{ asset('front/assets/images/logo.png') }}" alt="">
                                </a>
                            </div>
                            <p>I’m Michal Škvarenina, a multi-disciplinary designer currently working at Wild and as a
                                freelance designer.</p>
                            <ul>
                                <li><i class="fas fa-phone"></i> +212 34 45 45 98</li>
                                <li><i class="fas fa-home"></i> Angle Bd Abdelmoumen & rue soumaya, Résidence</li>
                                <li><i class="fas fa-envelope"></i> hello@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->

    <!--====== SEARCH PART START ======-->

    <div class="binduz-er-news-search-box">
        <div class="binduz-er-news-search-header">
            <div class=" container mt-60">
                <div class="row">
                    <div class=" col-6">
                        <img src="{{ asset('front/assets/images/logo-4.png') }}" alt=""> <!-- search title -->
                    </div>
                    <div class=" col-6">
                        <div class="binduz-er-news-search-close float-end">
                            <button class="binduz-er-news-search-close-btn">Close <span></span><span></span></button>
                        </div> <!-- search close -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search header -->
        <div class="binduz-er-news-search-body">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-news-search-form">
                            <form action="#">
                                <input type="text" placeholder="Search for Products">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search body -->
    </div>

    <!--====== SEARCH PART ENDS ======-->

    <!--====== BINDUZ TOP HEADER PART START ======-->

    <div class="binduz-er-top-header-area-4 bg_cover d-none d-lg-block">
        <div class=" container">
            <div class="row align-items-center">
                <div class=" col-lg-6 col-md-7">
                    <div class="binduz-er-top-header-lang">
                        <div class="binduz-er-select-item">
                            <ul class="nav navbar-nav align-items-center ms-auto">


                            </ul>
                        </div>
                    </div>
                    <div class="binduz-er-top-header-weather">
                        <ul>
                            <li><a href="#"><i class="fal fa-cloud"></i> 22°F</a></li>
                            <li><a href="#"><i class="fal fa-cloud"></i> 22°F</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-5">
                    <div class="binduz-er-topbar-headline float-end">
                        <p><span><i class="fas fa-bolt"></i> Trending News:</span> <a href="#">Miranda halim was
                                viral after finish his workout.</a></p>
                        <p><span><i class="fas fa-bolt"></i> Trending News:</span> <a href="#">Miranda halim was
                                viral after finish his workout.</a></p>
                        <p><span><i class="fas fa-bolt"></i> Trending News:</span> <a href="#">Miranda halim was
                                viral after finish his workout.</a>.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="binduz-er-top-header-ad pt-30 pb-30 d-none d-lg-block">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <img src="{{ asset('front/assets/images/space-bg-6.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

    <!--====== BINDUZ TOP HEADER PART ENDS ======-->

    <!--====== BINDUZ HEADER PART START ======-->

    <header class="binduz-er-header-area binduz-er-header-area-4">
        <div class="binduz-er-header-nav">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-header-meddle-bar d-flex justify-content-between">
                            <div class="binduz-er-logo">
                                <a href="#"><img src="{{ asset('front/assets/images/logo-6.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="navigation">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="{{ route('front.index') }}">Home<i></i></a>

                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="archived.html">Archived </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">languge<i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li class="nav-item dropdown dropdown-language">
                                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">category<i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    @foreach ($category as $item)
                                                        <li><a
                                                                href="{{ route('CategoryPost', $item->id) }}">{{ $item->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div> <!-- navbar collapse -->
                                    <div class="binduz-er-navbar-btn d-flex align-items-center">
                                        <div class="binduz-er-search-btn d-none d-sm-block">
                                            <a class="binduz-er-news-search-open" href="#"><i
                                                    class="far fa-search"></i></a>
                                        </div>
                                        <span
                                            class="binduz-er-toggle-btn binduz-er-news-canvas_open d-block d-lg-none">
                                            <i class="fal fa-bars"></i>
                                        </span>
                                    </div>
                                </nav>
                            </div> <!-- navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--====== BINDUZ HEADER PART ENDS ======-->
    @yield('contant')

    <!--====== BINDUZ VIDEO POST 4 PART ENDS ======-->

    <!--====== BINDUZ FOOTER 2 PART START ======-->

    <footer class="binduz-er-footer-area-4">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="row">
                        <div class=" col-lg-3">
                            <div class="binduz-er-footer-about binduz-er-footer-about-4">
                                <div class="binduz-er-logo">
                                    <a href="#"><img src="assets/images/logo-7.png" alt=""></a>
                                </div>
                                <p>Michael Madigan on Sunday was confronted with the reality that he lacks support from
                                    nearly a third.</p>
                                <ul>
                                    <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=" col-lg-5">
                            <div class="binduz-er-footer-gallery ml-50">
                                <div class="binduz-er-footer-title">
                                    <h4 class="binduz-er-title">Photo Showcase</h4>
                                </div>
                                <div class="binduz-er-footer-gallery-widget d-flex">
                                    <div class="binduz-er-item">
                                        <a href="#">
                                            <img src="assets/images/footer-gallery-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="binduz-er-item">
                                        <a href="#">
                                            <img src="assets/images/footer-gallery-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="binduz-er-item">
                                        <a href="#">
                                            <img src="assets/images/footer-gallery-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="binduz-er-footer-gallery-widget d-flex">
                                    <div class="binduz-er-item">
                                        <a href="#">
                                            <img src="assets/images/footer-gallery-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="binduz-er-item">
                                        <a href="#">
                                            <img src="assets/images/footer-gallery-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="binduz-er-item">
                                        <a href="#">
                                            <img src="assets/images/footer-gallery-6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4">
                            <div class="binduz-er-footer-navigation binduz-er-footer-navigation-4">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Company Info</h3>
                                </div>
                                <div class="binduz-er-footer-list">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Local print ads</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Media kit</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Archives</a></li>
                                        <li><a href="#">Coupons</a></li>
                                        <li><a href="#">Manage Web Notifications</a></li>
                                        <li><a href="#">Chicago Tribune Store</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="binduz-er-footer-copyright-area binduz-er-footer-copyright-area-4">
        <div class=" container">
            <div class="row align-items-center">
                <div class=" col-lg-6">
                    <div class="binduz-er-copyright-text">
                        <p>Copyright By@<span>Mohmmad alomary</span> - 2022</p>
                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class="binduz-er-copyright-menu float-lg-end float-none">
                        <ul>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Claim A Report</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BINDUZ FOOTER 2 PART ENDS ======-->





    <!--====== jquery js ======-->
    <script src="{{ asset('front/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('front/assets/js/slick.min.js') }}"></script>

    <!--====== nice select js ======-->
    <script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>
