@extends('layout.layout')

@section('title','musculacao')

@section('conteudo')


    <!--==============================
    About Area
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 text-lg-end">
                    <div class="about-thumb mb-5 mb-lg-0">
                        <img class="about-img-1" src="assets/img/normal/about_1-1.png" alt="img">
                        <img class="about-img-2 jump" src="assets/img/normal/about_1-2.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <span class="sub-title">More About Us</span>
                            <h2 class="sec-title">Unlock Your Full Potential,
                                Achieve Your Goals.</h2>
                            <p class="sec-text">Welcome to Fitmas. your ultimate destination for achieving your fitness goals. We understand the importance of leading a healthy lifestyle and provide a top-notch fitness facility to support you in your fitness journey.
                            </p>
                            <div class="about-tab-1">
                                <div class="filter-menu-active">
                                    <button data-filter=".cat1" class="active" type="button">Our Mission</button>
                                    <button data-filter=".cat2" type="button">Our Vision</button>
                                    <button data-filter=".cat3" type="button">Our Goal</button>
                                </div>
                                <div class="filter-active-cat1">
                                    <div class="filter-item cat1">
                                        <div class="about-tab-icon">
                                            <img src="assets/img/icon/about-icon.svg" alt="img">
                                        </div>
                                        <p class="about-tab-text">Gyms play a vital role in promoting an active and healthy lifestyle. They provide a supportive and motivating environment for individuals to engage in regular physical activity.</p>
                                    </div>
                                    <div class="filter-item cat2">
                                        <div class="about-tab-icon">
                                            <img src="assets/img/icon/about-icon.svg" alt="img">
                                        </div>
                                        <p class="about-tab-text">Gyms play a vital role in promoting an active and healthy lifestyle. They provide a supportive and motivating environment for individuals to engage in regular physical activity.</p>
                                    </div>
                                    <div class="filter-item cat3">
                                        <div class="about-tab-icon">
                                            <img src="assets/img/icon/about-icon.svg" alt="img">
                                        </div>
                                        <p class="about-tab-text">Gyms play a vital role in promoting an active and healthy lifestyle. They provide a supportive and motivating environment for individuals to engage in regular physical activity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn">Make Appointment</a>
                            <div class="about-info-wrap">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title">Need Help?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-area-2 space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Services</span>
                <h2 class="sec-title">Service We Provide</h2>
            </div>
        </div>
        <div class="container">
            <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Make An Appointment</span>
                            <h2 class="sec-title text-white">Get a Free Consultancy
                                Right Now Here!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Make Appointment</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Need Help?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-area-1 space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Trainer</span>
                <h2 class="sec-title">Meet Our Amazing Team</h2>
            </div>
            <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-1.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-2.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-3.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-4.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-1.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-2.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-3.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-4.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                            </h4>
                            <span class="team-card_desig">CEO/Founder</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
           <!--==============================
    All Js File
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


</body>

@endsection
