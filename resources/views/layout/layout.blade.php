<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Academia Viva Bem</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json')  }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<!--==============================
     Preloader
    ==============================-->
    <!--<div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>-->
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="" alt="Fitmas"></a>
                    </div>
                    <p class="about-text">A gym, also known as a fitness center or health club, is a facility dedicated to physical fitness and exercise gyms and typically offer a range</p>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <ul class="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="project-details.html">Our Mission</a></li>
                    <li><a href="team.html">Meet The Teams</a></li>
                    <li><a href="project.html">Our Projects</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>

<!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="Fitmas"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="team-2.html">Team Page 02</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="gallery.html">Gallery Page</a></li>
                            <li><a href="gallery-2.html">Gallery Page 02</a></li>
                            <li><a href="project.html">Project Page</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


     <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout1">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a></li>
                                <li><i class="far fa-clock"></i>Mon - Sat: 8.00 am-7.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visit our social pages</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sobre') }}">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Serviços</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Servicos</a></li>
                                            <li><a href="service-details.html">Detalhes do Serviço</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/modalidades') }}">Modalidades</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/modalidades/musculacao') }}">Musculação</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                                            <li><a href="{{ url('/treino') }}">Treino</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/noticias') }}">Noticias</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-2.html">Blog 02</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/treino') }}">Treino</a></li>
                                    <li>
                                        <a href="contact.html">Contato</a>
                                    </li>

                                </ul>


                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-lg-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="contact.html" class="btn d-xl-block d-none">
                                    Get a Quote
                                </a>
                                <button type="button" class="btn btn-border sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="site">

        @yield('conteudo')

    <!--======== / Hero Section ========-->

    </main>

    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
        <div class="container">
            <div class="contact-card">
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Gym Location</p>
                        <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Email Address</p>
                        <a href="mailto:health@Fitmas.com" class="info-card_link">health@Fitmas.com</a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Phone Number</p>
                        <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a>
                    </div>
                </div>
            </div>
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo-white.svg" alt="Fitmas"></a>
                                </div>
                                <p class="about-text">A gym, also known as a fitness center or health club, is a facility dedicated to physical fitness and exercise gyms and typically offer a range</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service-details.html">Our Mission</a></li>
                                    <li><a href="team.html">Meet The Teams</a></li>
                                    <li><a href="project.html">Our Projects</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Gallery</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed1.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed2.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed3.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed4.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed5.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed6.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get Newsletter</h3>
                            <p class="footer-text">Get 10% off your first order! Hurry up</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" type="email" placeholder="Email Address" required="">
                                </div>
                                <button type="submit" class="btn style2">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> All Rights Reserved.</p></div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
      <!--==============================
    Todos os Arquivos Js
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Arquivo Principal Js -->
    <script src="assets/js/main.js"></script>

</body>

</html>
