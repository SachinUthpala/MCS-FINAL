<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();

require './DB/config.conn.php';

$sql = "SELECT * FROM products ORDER BY productId LIMIT 6";
$smtp = $pdo->prepare($sql);
$smtp->execute();

?>

<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MCS Software Engineering </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-16x16.png">
	
	  <!--  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="IT Solutions & Technology HTML Template ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/custom-animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-all.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/twentytwenty.css">


    <link rel="stylesheet" href="assets/css/module-css/banner.css">
    <link rel="stylesheet" href="assets/css/module-css/slider.css">
    <link rel="stylesheet" href="assets/css/module-css/footer.css">
    <link rel="stylesheet" href="assets/css/module-css/services.css">
    <link rel="stylesheet" href="assets/css/module-css/sliding-text.css">
    <link rel="stylesheet" href="assets/css/module-css/about.css">
    <link rel="stylesheet" href="assets/css/module-css/counter.css">
    <link rel="stylesheet" href="assets/css/module-css/portfolio.css">
    <link rel="stylesheet" href="assets/css/module-css/process.css">
    <link rel="stylesheet" href="assets/css/module-css/contact.css">
    <link rel="stylesheet" href="assets/css/module-css/testimonial.css">
    <link rel="stylesheet" href="assets/css/module-css/brand.css">
    <link rel="stylesheet" href="assets/css/module-css/newsletter.css">
    <link rel="stylesheet" href="assets/css/module-css/team.css">
    <link rel="stylesheet" href="assets/css/module-css/pricing.css">
    <link rel="stylesheet" href="assets/css/module-css/event.css">
    <link rel="stylesheet" href="assets/css/module-css/blog.css">
    <link rel="stylesheet" href="assets/css/module-css/why-choose.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/module-css/shop.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->














    <div class="page-wrapper">
        <?php require './Components/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



        <!--Main Slider Two Start-->
        <section class="main-slider-two" id="home">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView":1,"loop":true,"effect":"fade","pagination":{"el":"#main-slider-pagination","type":"bullets","clickable":true},"navigation":{"nextEl":"#main-slider__swiper-button-next","prevEl":"#main-slider__swiper-button-prev"},"autoplay":{"delay":8000}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-1.jpg);"></div>
                        <ul class="list-unstyled main-slider-two__menu">
                            <li><a href="about.php">Help</a></li>
                            <li><a href="contact.php">Support</a></li>
                            <li><a href="faq.php">Faqs</a></li>
                        </ul>
                        <div class="main-slider-two__social-box">
                            <h4 class="main-slider-two__social-title">Follow Us:</h4>
                            <div class="main-slider-two__social-box-inner">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-dribble"></span></a>

                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                        <!--Brand Two Start -->
                        
                        <!--Brand Two End -->
                        <div class="main-slider-two__shape-1"></div>
                        <div class="main-slider-two__shape-2 float-bob-x">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div>
                        <div class="main-slider-two__shape-3 float-bob-y">
                            <img src="assets/images/shapes/main-slider-two-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <!-- <div class="main-slider-two__sub-title-box">
                                            <div class="main-slider-two__sub-title-icon">
                                                <img src="assets/images/icon/main-slider-sub-title-icon.png" alt="">
                                            </div>
                                            <p class="main-slider-two__sub-title">IT Solutions Designed for Your Success
                                            </p>
                                        </div> -->
                                        <h2 class="main-slider-two__title">Innovating  the <span>Future </span> <br>
                                            <span>with Smart </span> <br> Banking
                                        </h2>
                                        <p class="main-slider-two__text">Reliable, high-performance, and easy-to-use <br>
                                            heque scanning solutions designed to <br> streamline your financial workflows.</p>
                                        <div class="main-slider-two__btns-box">
                                            <div class="main-slider-two__btn-box-1">
                                                <a href="contact.php" class="thm-btn">Get Started<span class="icon-right-arrow"></span></a>
                                            </div>
                                            <div class="main-slider-two__btn-box-2">
                                                <a href="about.php" class="thm-btn">Read More<span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                        <div class="main-slider-two__shield-check-icon">
                                            <img src="assets/images/icon/main-slider-shield-check-icon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-2.jpg);"></div>
                        <ul class="list-unstyled main-slider-two__menu">
                            <li><a href="about.php">Help</a></li>
                            <li><a href="contact.php">Support</a></li>
                            <li><a href="faq.php">Faqs</a></li>
                        </ul>
                        <div class="main-slider-two__social-box">
                            <h4 class="main-slider-two__social-title">Follow Us:</h4>
                            <div class="main-slider-two__social-box-inner">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-tiktok"></span></a>

                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                        <!--Brand Two Start -->
                        
                        <!--Brand Two End -->
                        <div class="main-slider-two__shape-1"></div>
                        <div class="main-slider-two__shape-2 float-bob-x">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div>
                        <div class="main-slider-two__shape-3 float-bob-y">
                            <img src="assets/images/shapes/main-slider-two-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <!-- <div class="main-slider-two__sub-title-box">
                                            <div class="main-slider-two__sub-title-icon">
                                                <img src="assets/images/icon/main-slider-sub-title-icon.png" alt="">
                                            </div>
                                            <p class="main-slider-two__sub-title">IT Solutions Designed for Your Success
                                            </p>
                                        </div> -->
                                        <h2 class="main-slider-two__title">Self-Service <span>Devices</span> <br>
                                            <span>to Drive Your Business</span> <br> Forward
                                        </h2>
                                        <p class="main-slider-two__text">Smart, efficient, and user-centric <br>
                                            elf-service devices crafted to <br> enhance customer experience and operational efficiency.</p>
                                        <div class="main-slider-two__btns-box">
                                            <div class="main-slider-two__btn-box-1">
                                                <a href="contact.php" class="thm-btn">Get Started<span class="icon-right-arrow"></span></a>
                                            </div>
                                            <div class="main-slider-two__btn-box-2">
                                                <a href="about.php" class="thm-btn">Read More<span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                        <div class="main-slider-two__shield-check-icon">
                                            <img src="assets/images/icon/main-slider-shield-check-icon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-3.jpg);"></div>
                        <ul class="list-unstyled main-slider-two__menu">
                            <li><a href="about.html">Help</a></li>
                            <li><a href="contact.html">Support</a></li>
                            <li><a href="faq.html">Faqs</a></li>
                        </ul>
                        <div class="main-slider-two__social-box">
                            <h4 class="main-slider-two__social-title">Follow Us:</h4>
                            <div class="main-slider-two__social-box-inner">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-dribble"></span></a>

                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                        <!--Brand Two Start -->
                        
                        <!--Brand Two End -->
                        <div class="main-slider-two__shape-1"></div>
                        <div class="main-slider-two__shape-2 float-bob-x">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div>
                        <div class="main-slider-two__shape-3 float-bob-y">
                            <img src="assets/images/shapes/main-slider-two-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <!-- <div class="main-slider-two__sub-title-box">
                                            <div class="main-slider-two__sub-title-icon">
                                                <img src="assets/images/icon/main-slider-sub-title-icon.png" alt="">
                                            </div>
                                            <p class="main-slider-two__sub-title">IT Solutions Designed for Your Success
                                            </p>
                                        </div> -->
                                        <h2 class="main-slider-two__title">Cheque <span>Scanners</span> <br>
                                            <span>to Drive Your Business</span> <br> Forward
                                        </h2>
                                        <p class="main-slider-two__text">Reliable, high-performance<br>
                                            nd easy-to-use cheque scanning solutions <br> designed to streamline your financial workflows.</p>
                                        <div class="main-slider-two__btns-box">
                                            <div class="main-slider-two__btn-box-1">
                                                <a href="contact.php" class="thm-btn">Get Started<span class="icon-right-arrow"></span></a>
                                            </div>
                                            <div class="main-slider-two__btn-box-2">
                                                <a href="about.php" class="thm-btn">Read More<span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                        <div class="main-slider-two__shield-check-icon">
                                            <img src="assets/images/icon/main-slider-shield-check-icon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <!-- If we need pagination / navigation -->
                <div id="main-slider-pagination" class="swiper-pagination"></div>
                <div class="main-slider-two__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-prev">
                        <i class="icon-right-up"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-next">
                        <i class="icon-right-up"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider Two End-->

        <!--About Two Start -->
        <section class="about-two" id="about">
            <div class="about-two__shape-2"></div>
            <div class="about-two__shape-3">
                <img src="assets/images/shapes/about-two-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                                <!-- <div class="about-two__img-2">
                                    <img src="assets/images/resources/about-two-img-2.jpg" alt="">
                                </div> -->
                                <div class="about-two__shape-1"></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">About Us</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h3 class="section-title__title title-animation">Welcome to
                                    <span></span><br><span>MCS Software Engineering !</span><br><span>Powering the Future of Banking
                                    </span> with Smart IT & Automation
                                </h3>
                            </div>
                            <p style="padding-bottom: 10px !important;">Welcome to <span class="text-secondary">MCS Software Engineering </span>, a leading provider of innovative IT solutions and automation technologies designed to transform the banking and financial sectors.</p>
                            <p style="padding-bottom: 10px !important;" >For over a decade, MCS has been at the forefront of digital innovation — helping organizations streamline operations, enhance customer experiences, and embrace the future of smart technology.</p>
                            <p class="about-two__text">Our team of experienced professionals brings together deep industry expertise and technical excellence to deliver secure, scalable, and future-ready software solutions. From system integration and automation to custom application development, we ensure every solution is built with precision, performance, and reliability in mind.</p>
                          <div class="about-two__points-box">
                                <ul class="about-two__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p>Innovation that drives progress</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p>Technology that delivers results</p>
                                    </li>
                                </ul>
                                <ul class="about-two__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p>Partnerships that empower success</p>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="about-two__experience-contact-and-btn">
                                <div class="about-two__experience-box">
                                    <div class="about-two__experience-count-box">
                                        <h3 class="odometer" data-count="18">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p class="about-two__experience-text">Years of
                                        <br> Experience</p>
                                </div>
                                <div class="about-two__call-box">
                                    <div class="about-two__call-icon">
                                        <span class="icon-customer-service-headset"></span>
                                    </div>
                                    <div class="about-two__call-content">
                                        <span>call us for inquiry</span>
                                        <p><a href="tel:00123456767">+94 11 223 1502</a></p>
                                    </div>
                                </div>
                                <div class="about-two__btn-box">
                                    <a href="about.php" class="thm-btn">Learn More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End -->
        
         <!-- Start our partners -->
        <section class="related-products">
            <div class="container">
                <div class="related-products__title">
                    <h3>Our Valuble Partners</h3>
                    
                </div>
                <div class="row">
                    <div class="related-products__carousel owl-carousel owl-theme owl-dot-style1" >
                        <!--Product All Single Start-->
                     

                        <div class="item">
                            <img src="assets/images/brand/bran1.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                         <div class="item">
                            <img src="assets/images/brand/bran2.png" alt="" style=" border-radius: 5px !important;">
                        </div>


                        <div class="item">
                            <img src="assets/images/brand/bran3.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        <div class="item">
                            <img src="assets/images/brand/bran4.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        <div class="item">
                            <img src="assets/images/brand/bran5.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        <div class="item">
                            <img src="assets/images/brand/bran6.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        <div class="item">
                            <img src="assets/images/brand/bran7.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        <div class="item">
                            <img src="assets/images/brand/bran8.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        <div class="item">
                            <img src="assets/images/brand/bran9.png" alt="" style=" border-radius: 5px !important;">
                        </div>

                        
                     
                     
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End our partners -->

        <!-- Counter Two Start -->
        <section class="counter-two">
            <div class="counter-two__bg-shape" style="background-image: url(assets/images/shapes/counter-two-bg-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-support"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="70">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__text">Our Team</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="15">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__text">Software Engineers</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-idea"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="15">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__text">QA & Implementation</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-graduation-cap"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="30">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__text">Technical Engineers</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                </div>
            </div>
        </section>
        <!-- Counter Two End -->

        <!-- Services Two Start -->
        <section class="services-two" id="services">
            <div class="services-two__shape-1"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape-1"></div>
                            <span class="section-title__tagline">Our Services</span>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>
                        <h2 class="section-title__title title-animation">Your Business with Cutting-Edge IT<br>
                            Solutions 
                            <span>Innovative IT Services</span><br><span>Tailored for Your Success</span>
                        </h2>
                    </div>
                    <a href="services.html" class="services-two__round-text-box">
                        <div class="services-two__round-text-box-outer">
                            <div class="services-two__round-text-box-inner">
                                <div class="services-two__curved-circle">
                                    View All Project View All Services
                                </div>
                                <div class="services-two__round-icon">
                                    <img src="assets/images/icon/services-two-round-icon.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="services-two__bottom">
                    <div class="services-two__services-list">
                        <div class="services-two__services-list-single services-two__services-list-single-1">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="advanced-technology.html"> Smart Banking Interfaces
                                        <br> </a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <p class="services-two__desc">Bridge the gap between systems with intelligent, secure, and efficient banking interfaces.
 We specialize in connecting with core banking platforms to deliver seamless integrations, data exchange, and workflow automation.</p>
                            </div>
                            <div class="services-two__hover-img">
                                <!--<img src="assets/images/services/services-2-1.jpg" alt="Image">-->
                            </div>
                        </div>
                        
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="cloud-managed-services.html">
                             Automation & 
                                        <br>Workflow Solutions</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <div class="services-two__service-list-box">
                                <p class="services-two__desc">Enhance efficiency through smart automation.
 Our solutions streamline cheque processing, refer-to-drawer handling, and other repetitive tasks — reducing errors and improving turnaround time.</p>
                            </div>
                            </div>
                            <div class="services-two__hover-img">
                                <!--<img src="assets/images/services/services-2-1.jpg" alt="Image">-->
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="backup-recovery.html">
                        Self-Service & Device Integration
                                        <br></a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <div class="services-two__service-list-box">
                                <p class="services-two__desc">Empower branches with advanced self-service kiosks, cheque scanners, and teller capture devices.
 We provide full integration, monitoring, and maintenance to ensure smooth and reliable operations.</p>
                            </div>
                            </div>
                            <div class="services-two__hover-img">
                                <!--<img src="assets/images/services/services-2-1.jpg" alt="Image">-->
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="backup-recovery.html">
                        Infrastructure & Cloud Services
                                        <br></a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <div class="services-two__service-list-box">
                                <p class="services-two__desc">Optimize your IT environment with scalable infrastructure and secure cloud solutions.
 We help you modernize systems, improve availability, and maintain compliance across platforms.</p>
                            </div>
                            </div>
                            <div class="services-two__hover-img">
                                <!--<img src="assets/images/services/services-2-1.jpg" alt="Image">-->
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="backup-recovery.html">
                        Support, Monitoring & Maintenance
                                        <br></a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <div class="services-two__service-list-box">
                                <p class="services-two__desc">Rely on our 24/7 support and proactive monitoring.
 We ensure your applications, systems, and devices perform flawlessly with preventive maintenance and rapid incident response.</p>
                            </div>
                            </div>
                            <div class="services-two__hover-img">
                                <!--<img src="assets/images/services/services-2-1.jpg" alt="Image">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Two End -->

        <!-- Why Choose One Start -->
        <section class="why-choose-one">
            <div class="why-choose-one__shape-3 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-3.png" alt="">
            </div>
            <div class="why-choose-one__shape-4"></div>
            <div class="why-choose-one__shape-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Why Chooses Us</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Innovative<span> Software Solutions
                                    </span><br><span>Tailored for</span>
                                    Your<br> Success
                                </h2>
                            </div>
                            <p class="why-choose-one__text">Since 2002, MCS Software Engineering has been delivering 
                                reliable and innovative software solutions.  Our products are <span class="text-highlight">locally developed, fully customizable</span>, and designed to integrate
                                 seamlessly with your existing systems — delivering measurable efficiency, security, and performance improvements. <br> We take pride 
                                 in understanding every client’s unique operational challenges and building solutions that truly make a difference </p>
                            <ul class="why-choose-one__progress-list list-unstyled">
                                <li>
                                    <div class="why-choose-one__progress">
                                        <h4 class="why-choose-one__progress-title"><span class="icon-right-arrow px-2"></span>Customizable Solutions</h4>
                                       
                                    </div>
                                </li>
                                <li>
                                    
                                        <h4 class="why-choose-one__progress-title"><span class="icon-right-arrow"></span>Expert Team</h4>
      
                                    
                                </li>
                                <li>
                                    
                                        <h4 class="why-choose-one__progress-title"><span class="icon-right-arrow"></span>End-to-End Project Management</h4>
      
                                    
                                </li>
                               
                            </ul>
                            <div class="why-choose-one__btn-and-client-info">
                                <div class="why-choose-one__btn-box">
                                    <a href="#about" class="thm-btn">About Us<span class="icon-right-arrow"></span></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="why-choose-one__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="assets/images/resources/why-choose-one-img-1.png" alt="">
                            </div>
                            <div class="why-choose-one__shape-1 img-bounce">
                                <img src="assets/images/shapes/why-choose-one-shape-1.png" alt="">
                            </div>
                            <div class="why-choose-one__shape-2 float-bob-x">
                                <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose One End -->

        <!-- Sliding Text Three Start -->
        
        <!-- Sliding Text Three End -->

        <!-- Process Two Start -->
        <section class="process-two">
            <div class="process-two__bg" style="background-image: url(assets/images/backgrounds/process-two-bg.jpg);">
            </div>
            <div class="process-two__bg-shape float-bob-y" style="background-image: url(assets/images/shapes/process-two-bg-shape.png);">
            </div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Working Process</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">From Concept to Creation<br><span>Seamless, Strategic, and Smart</span>
                    </h2>
                </div>
                <ul class="row list-unstyled">
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">Research & Discovery</h3>
                            <p class="process-two__text">We start by understanding your goals, challenges, and vision.
                             Through detailed discussions, brainstorming sessions, and strategic analysis, we define the project scope advanced
                             create a roadmap tailored to your business needs. </p>
                        </div>
                    </li>
                    <!--Process Two Single End-->
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            <div class="process-two__shape-1 float-bob-x">
                                <img src="assets/images/shapes/process-two-shape-1.png" alt="">
                            </div>
                            <div class="process-two__shape-2 float-bob-x">
                                <img src="assets/images/shapes/process-two-shape-2.png" alt="">
                            </div>
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">Design and Development</h3>
                            <p class="process-two__text">Once the strategy is set, our design and development teams work closely to bring your ideas to life 
                            We focus on usability, performance, and scalability  — ensuring the end product is both functional and future-ready.</p>
                        </div>
                    </li>
                    <!--Process Two Single End-->
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">Testing and Launch</h3>
                            <p class="process-two__text">Before deployment, each solution undergoes rigorous  testing for performance, security, and reliability.
                                After thorough quality assurance, we seamlessly launch your project 
                            — ensuring a smooth transition to  production and full post-launch support. </p>
                        </div>
                    </li><li>
                        <!--Process Two Single End-->
                </li></ul>
            </div>
        </section>
        <!-- Process Two End -->

        <!-- Portfolio Two Start -->
        
         <!-- Start Related Products -->
        <section class="related-products">
            <div class="container">
                <div class="related-products__title">
                    <h3>Our Products</h3>
                    <p>Our Products and Solutions.</p>
                </div>
                <div class="row">
                    <div class="related-products__carousel owl-carousel owl-theme owl-dot-style1">
                        <!--Product All Single Start-->
                        <?php while($row = $smtp->fetch(PDO::FETCH_ASSOC)){ ?>
                        <div class="item"
     onclick="window.location.href='product.php?main=<?php echo urlencode($row['MainCategory']); ?>&mainID=<?php echo urlencode($row['MainCategory']); ?>&sub=<?php echo urlencode($row['SubCategory']); ?>&subID=<?php echo urlencode($row['SubCategory']); ?>'">
                            <div class="single-product-style1">
                                <div class="single-product-style1__img">
                                    <img src="<?php echo 'Images/ProductImages/'.$row['Image']; ?>" alt="" height="390px" >
                                    <img src="<?php echo 'Images/ProductImages/'.$row['Image']; ?>" alt="" height="390px" >
                                    <ul class="single-product-style1__overlay">
                                       
                                    </ul>
                                    <ul class="single-product-style1__info">
                                       
                                    </ul>
                                </div>
                                <div class="single-product-style1__content">
                                    <div class="single-product-style1__content-left">
                                        <h4>
                                            <a href="#">
                                                <?php
                                                $words = explode(' ', trim($row['ProductName']));
                                                echo implode(' ', array_slice($words, 0, 4));
                                                if (count($words) > 4) {
                                                    echo '...';
                                                }
                                                ?>
                                            </a>

                                        </h4>
                                      
                                    </div>
                                    <div class="single-product-style1__content-right">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Related Products -->
        
        <!-- Pricing Two End -->

        <!-- Event One Start -->
        <section class="event-one">
            <div class="event-one__shape-1 float-bob-y">
                <img src="assets/images/shapes/event-one-shape-1.png" alt="">
            </div>
            <div class="event-one__shape-2 float-bob-x">
                <img src="assets/images/shapes/event-one-shape-2.png" alt="">
            </div>
            <div class="event-one__shape-3"></div>
            <div class="event-one__shape-4"></div>
            <div class="event-one__shape-2"></div>
            <div class="container">
                <div class="event-one__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape-1"></div>
                            <span class="section-title__tagline">Featured Services</span>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>
                        <h2 class="section-title__title title-animation">Featured <span>Services
                            </span> </h2>
                    </div>
                    <div class="event-one__top-btn-box">
                        <a href="contact.php" class="thm-btn">Contact Us<span class="icon-right-arrow"></span></a>
                    </div>
                </div>
                <div class="event-one__bottom">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="event-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="event-one__img">
                                    <img src="assets/images/resources/event-one-img-1.jpg" alt="">
                                    <div class="event-one__video-link">
                                        <a href="" class="video-popup">
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="event-one__right">
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="contact.php">Software Projects</a></h5>
                                            <p>At <span class="text-highlight">MCS Software Engineering</span>, we craft <span class="text-highlight" >scalable, secure, and user-friendly software solutions</span> that empower organizations across Sri Lanka.
 Our locally developed applications are designed to enhance productivity, streamline workflows, and deliver lasting business value.
</p>
                                        </div>
                                        
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="#">Driving innovation through smart, tailored software solutions.
                                                    </a>
                                            </li>
                                           
                                        </ul>
                                        
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInRight" data-wow-delay="200ms">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="contact.php">Self-Service Devices</a></h5>
                                            <p>We provide <span class="text-highlight">smart, interactive self-service solutions</span> that enhance convenience and operational efficiency for modern businesses and financial institutions.
 Our devices are built for reliability and designed to seamlessly integrate with existing systems</p>
                                        </div>
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="#">Empowering customers with automation and simplicity.
                                                    </a>
                                            </li>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="contact.php">Scanner Machines</a></h5>
                                            <p>MCS offers <span class="text-highlight">advanced cheque scanning and image-capture solutions</span> that ensure speed, accuracy, and data security.
 Trusted by leading banks and enterprises, our scanners simplify cheque clearing and processing operations.</p>
                                        </div>
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="#">Fast, secure, and precise scanning for critical financial workflows.
                                                    </a>
                                            </li>
                                           
                                        </ul>
                                        
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event One End -->

        <!-- Contact Two Start -->
        <section class="contact-two" id="contact">
            <!-- <ul class="contact-two__sliding-text-list list-unstyled marquee_mode-2">
                <li>
                    <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                </li>
            </ul> -->
            <!-- <div class="contact-two__bg" style="background-image: 
             url(assets/images/backgrounds/contact-two-bg.jpg);"> 
            </div> -->
            <div class="contact-two__shape-1 float-bob-y">
                <img src="assets/images/shapes/contact-two-shape-1.png" alt="">
            </div>
            <div class="contact-two__shape-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-two__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Get In Touch</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Conversation
                                    <span>– Reach</span><br><span>Out Anytime</span>
                                </h2>
                            </div>
                            <p class="contact-two__text">We're here to listen! Whether you have<br> questions, feedback,
                                or just want to say hello,<br> feel free to reach out. </p>
                            <ul class="contact-two__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-mail"></span>
                                    </div>
                                    <div class="content">
                                        <span>Email Us</span>
                                        <p><a href="mailto:helpdesk@mcssw.com">helpdesk@mcssw.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="content">
                                        <span>Contact US</span>
                                        <p><a href="tel:0112231502">011 223 1502</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <span>Our Address</span>
                                        <p>No 03, Fife Road, Colombo 05</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <form id="contactForm" class="contact-form-validated contact-one__form" action="./Mail/ContactMail.php" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Full Name</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-user-1"></span>
                                            </div>
                                            <input type="text" name="name" placeholder="Thomas Alison" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Email Address</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-email"></span>
                                            </div>
                                            <input type="email" name="email" placeholder="thomas@domain.com" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Phone Number</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <input type="text" name="Phone" placeholder="+12 (00) 123 4567 890" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Subject</h4>
                                        <div class="contact-one__input-box">
                                            <div class="select-box">
                                                <select class="selectmenu wide" name="subject">
                                                    <option selected="selected" >Select A Subject
                                                    </option>
                                                    <option>General Inquiry</option>
<option>Request a Quote</option>
<option>Product/Service Information</option>
<option>Technical Support</option>
<option>Partnership Opportunity</option>
<option>Feedback or Suggestions</option>
<option>Billing or Payment Issue</option>
<option>Job or Internship Application</option>
<option>Schedule a Meeting</option>
<option>Other (Please Specify)</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-one__input-title">Inquiry about </h4>
                                    <div class="contact-one__input-box text-message-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-edit"></span>
                                        </div>
                                        <textarea name="message" placeholder="Write your message"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn"><span>Submit
                                                Now</span><i class="icon-right-arrow"></i></button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Two End -->        

        <!-- Testimonial Two Start -->
        
        <!-- Testimonial Two End -->

        <!-- Blog Two Start -->
        
        <!-- Blog Two End -->

        <!-- Newsletter Two Start -->
        <section class="newsletter-two">
            <div class="newsletter-two__shape-1">
                <img src="assets/images/shapes/newsletter-two-shape-1.png" alt="">
            </div>
            <div class="newsletter-two__shape-2 float-bob-x">
                <img src="assets/images/shapes/newsletter-two-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="newsletter-two__inner">
                    <div class="newsletter-two__left">
                        <h2 class="newsletter-two__title">Subcribe to Our Newsletter</h2>
                        <p class="newsletter-two__text">Get the latest SEO tips and software insights straight to your
                            inbox.</p>
                    </div>
                    <div class="newsletter-two__right">
                        <form class="newsletter-two__form">
                            <div class="newsletter-two__input">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <button type="submit" class="thm-btn">Subscribe Now <span class="icon-right-arrow"></span>
                            </button>
                            <div class="checked-box">
                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                <label for="skipper"><span></span>by Subscribing. Your Accept Privacy
                                    policy</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Two End -->



        <!--Site Footer Two Start-->
        <?php require './Components/Footer.php'; ?>
        <!--Site Footer Two End-->




    </div><!-- /.page-wrapper -->


    <?php require './Components/MobileNav.php'; ?>
        <!-- /.mobile-nav__wrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="far fa-times fa-fw"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/twentytwenty.js"></script>
    <script src="assets/js/jquery.event.move.js"></script>
    <script src="assets/js/marquee.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/jquery-sidebar-content.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/countdown.min.js"></script>




    <script src="assets/js/gsap/gsap.js"></script>
    <script src="assets/js/gsap/ScrollTrigger.js"></script>
    <script src="assets/js/gsap/SplitText.js"></script>




    <!-- template js -->
    <script src="assets/js/script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        <script>
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {

        // success toast
        Toastify({
            text: "Message sent successfully!",
            duration: 3000,
            gravity: "top",
            position: "right",
            close: true,
            backgroundColor: "#3f6cffff"
        }).showToast();

        form.reset();
    })
    .catch(error => {

        // error toast
        Toastify({
            text: "Something went wrong. Please try again!",
            duration: 3000,
            gravity: "top",
            position: "right",
            close: true,
            backgroundColor: "#dc3545"
        }).showToast();
    });
});
</script>

</body></html>