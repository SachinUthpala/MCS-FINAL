<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MCS Software Engineering About  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-16x16.png">
	
	  <!--  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="MCS Solutions ">

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
    <link rel="stylesheet" href="./assets/css/module-css/shop.css">
    <link rel="stylesheet" href="./assets/css/module-css/page-header.css">
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



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(./assets/images/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>MCS Services</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li>Our Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        



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

        




        <!-- Newsletter Two Start -->
        <section class="newsletter-two">
            <div class="newsletter-two__shape-1">
                <img src="images/newsletter-two-shape-1.png" alt="">
            </div>
            <div class="newsletter-two__shape-2 float-bob-x">
                <img src="images/newsletter-two-shape-2.png" alt="">
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

</body></html>