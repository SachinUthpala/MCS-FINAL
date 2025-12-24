<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();

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
                    <h2>Video Teller Machine</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li>VTM (Video Teller Machine)</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Product Details-->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__left">
                            <div class="product-details__left-inner">
                                <div class="product-details__content-box">
                                    <div class="swiper-container" id="shop-details-one__carousel">
                                        <div class="swiper-wrapper ">
                                            <div class="swiper-slide d-flex justify-content-center p-2" >
                                                <div class="product-details__img" >
                                                    <img src="assets/images/prroducts/VTM-removebg-preview.png" alt="" style="height: 400px !important; width: auto !important;">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                  
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__right">
                            <div class="product-details__top">
                                <h3 class="product-details__title">
                                   VTM (Video Teller Machine)
                                </h3>
                            </div>
                            
                            <div class="product-details__content">
                                <p class="product-details__content-text1">
                                
                                "VTM is a pioneering banking channel solution that leverages video conferencing technology to integrate the merits of self-service and counter service, providing full range banking experience with smaller footprint.
With its versatile modular design, VTM enables migration of complex counter services and customized financial consulting services to the self-service terminal. Over 95% of counter services are available on VTM, thus it can be utilized for branch transformation or teller-less branch, allowing customers to do almost all of their banking business via real-time video interaction and guidance of remote teller."

                                </p>
                                <p class="product-details__content-text2">Video Teller Machine<br>
                                    VTM</p>
                            </div>
                            
                            <div class="product-details__inner">
                             
                                <div class="product-details__buttons-boxes">
                                    <div class="product-details__buttons-1">
                                        <a href="./404.php" class="thm-btn">Request Machine<span class="icon-right-arrow"></span>
                                        </a>
                                    </div>

                                    <div class="product-details__buttons-1">
                                        <a href="https://global.grgbanking.com/en/ProductDetail_199_138.html" target=" " class="thm-btn">Spec Link<span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Product Details-->


        <!--Shop Details Start-->
        <section class="product-description">
            <div class="container">
                <div class="product-details__description">
                    <div class="product-details__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#description" class="tab-btn active-btn"><span>Description</span></li>
                            <li data-tab="#additional-information" class="tab-btn"><span>Product Specs</span></li>
                            <li data-tab="#reviews" class="tab-btn"><span>Reviews </span></li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="description">
                                <div class="product-details__tab-content-inner">
                                    <div class="product-details__description-content">
                                        <p class="product-details__description-text-1">

                                        "VTM is a pioneering banking channel solution that leverages video conferencing technology to integrate the merits of self-service and counter service, providing full range banking experience with smaller footprint.
With its versatile modular design, VTM enables migration of complex counter services and customized financial consulting services to the self-service terminal. Over 95% of counter services are available on VTM, thus it can be utilized for branch transformation or teller-less branch, allowing customers to do almost all of their banking business via real-time video interaction and guidance of remote teller."

                                        </p>
                                      
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="additional-information">
                                <div class="product-details__tab-content-inner">
                                    <div class="product-details__additional-information-content">
                                        <div class="product-description__list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p><span class="icon-right-arrow"></span>Multi-Channel Integration</p>
                                                    <p style="padding: 15px !important;">

                                                    VTM is an innovative solution to integrate branch counter, ATM, internet banking, mobile banking and telephone banking
VTM offers full range services to customer, including retail  &  corporate banking services

                                                    </p>
                                                </li>

                                                <li>
                                                    <p><span class="icon-right-arrow"></span>Round-the-clock Availability</p>
                                                    <p style="padding: 15px !important;">
                                                        24/7 remote teller assistance allows bank to extend far beyond its ordinary operation hours
</p>
                                                </li>

                                                <li>
                                                    <p><span class="icon-right-arrow"></span>Extended Network</p>
                                                    <p style="padding: 15px !important;">
                                                        Compared to a traditional branch, VTM requires much lower fixed and operational cost, as well as less regulatory application procedure, thus it is more flexible to be deployed to various off-premise locations
                                                        </p>
                                                    </li>



                                                <li>
                                                    <p><span class="icon-right-arrow"></span>Integrated Resources</p>
                                                    <p style="padding: 15px !important;">VTM facilitates a standardized and high-quality service platform to make the best use of expert resources.</p>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="reviews">
                                <div class="product-details__tab-content-inner">
                                    <!--Review One Start-->
                                   
                                    <!--Review One End-->

                                    <!--Start Review Form-->
                                    <div class="review-form-one">
                                        <div class="review-form-one__inner">
                                            <h3 class="review-form-one__title">Add a review</h3>
                                            <div class="review-form-one__rate-box">
                                                <p class="review-form-one__rate-text">Rate this product?</p>
                                                <div class="review-form-one__rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <form action="assets/inc/sendemail.php" class="review-form-one__form contact-form-validated" novalidate="novalidate">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="review-form-one__input-box text-message-box">
                                                            <textarea name="message" placeholder="Write a comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <input type="text" placeholder="Your name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <input type="email" placeholder="Email address" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <button type="submit" class="thm-btn review-form-one__btn">Submit a
                                                            review <span class="icon-right-arrow"></span></button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="result"></div>
                                        </div>
                                    </div>
                                    <!--End Review Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Shop Details End-->

        


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


</body></html>