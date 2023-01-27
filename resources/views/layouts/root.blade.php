<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="Besor Associates | Educational Travel Consultants">
    <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon">
    <title>Besor Associates | Educational Travel Consultants</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>

<body>
<div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ asset('assets/images/logo/logo-light.png') }}" class="logo-light" alt="logo">
                    <img src="{{ asset('assets/images/logo/logo-dark.png') }}" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav__item with-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="{{ url('/home') }}" class="nav__item-link">Home</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{ url('/about') }}" class="nav__item-link">About</a>
                                </li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{ url('/privacy') }}" class="nav__item-link">Privacy
                                        Policy</a>
                                </li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Programs</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="{{ url('/internships') }}" class="nav__item-link">Internship</a>
                                </li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{ url('/traineeships') }}" class="nav__item-link">Traineeship</a>
                                </li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{ url('/h1b') }}" class="nav__item-link">H1-B</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Applications</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="{{ url('/signup') }}" class="nav__item-link">New
                                        Account</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{ url('/login') }}" class="nav__item-link">Login</a>
                                </li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Contact</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="{{ url('/contact') }}" class="nav__item-link">Contact
                                        Us</a></li>
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                    </ul>
                </div>
            </div><!--  /.container  -->
        </nav>
        <!-- /.nav-item -->
    </header><!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
@yield('content')
<!-- ========================
       Footer
     ========================== -->
    <footer id="footer1" class="footer footer-1 bg-heading">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 footer__widget footer__widget-about">
                        <div class="footer__widget-content">
                            <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo" class="footer__logo">
                            <p>Our goal is to provide students and youth travellers with opportunities
                                for out-of-classroom exposure and make provisions available for personal development
                                through educational travel experiences...<br>
                                We simplify the choices for you!</p>
                            <ul class="contact__list list-unstyled">
                                <li><i class="icon-phone"></i>01-4537753</li>
                                <li><i class="icon-document"></i>info@internworkprograms.com</li>
                            </ul>
                        </div>
                    </div><!-- /.col-lg-3 -->
                    <div class="col-sm-12 col-md-6 ml-auto col-lg-3 footer__widget footer__widget-newsletter">
                        <h6 class="footer__widget-title">Stay Connected</h6>
                        <div class="footer__widget-content">
                            <p>Don’t miss our updates. You can subscribe to our new feeds or follow us!</p>
                            <div class="social__icons">
                                <a href="https://www.facebook.com/BesorNG/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/besorng"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram.com/besorassociates"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/besor-associates"><i
                                        class="fa fa-linkedin"></i></a>
                            </div><!-- /.social-icons -->
                        </div>
                    </div><!-- /.col-lg-3 -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="footer__copyright">
                            <span>&copy; 2006 - {{ date('Y') }} Besor Associates. All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="arrow_up"></i></button>
    <!-- /.wrapper -->

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
