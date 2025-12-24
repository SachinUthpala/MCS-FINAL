
<?php 
session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

require './DB/config.conn.php';

$MainCategory = $_GET['main'];
$subCategory = $_GET['sub'];
$MainCode = $_GET['mainID'];
$subId = $_GET['subID'];


$Sql = "SELECT * FROM `products` WHERE MainCategory = :MainCategory AND SubCategory = :SubCategory ";
$smtp = $pdo->prepare($Sql);
$smtp->execute([

    ':MainCategory' => $MainCode,
    ':SubCategory' => $subId
]);

$row = $smtp->fetch(PDO::FETCH_ASSOC);


// oue product 2

$sql2 = "SELECT * FROM products ORDER BY productId LIMIT 6";
$smtp2 = $pdo->prepare($sql2);
$smtp2->execute();


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
                    <h2><?php echo $row['ProductName']; ?></h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li><?php echo $MainCategory; ?></li>
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
                                            <div class="swiper-slide d-flex justify-content-center ">
                                                <div class="product-details__img" >
                                                        <img src="<?php echo './Images/ProductImages/'.$row['Image']; ?>" style="height: 400px !important; width: auto !important;">
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
                                    <?php echo $row['ProductName']; ?>
                                </h3>
                                <hr>
                            </div>
                            
                            <div class="product-details__content">
                                <p class="product-details__content-text1"><?php echo $row['Discription']; ?></p>
                                <p class="product-details__content-text2">REF. <?php echo $row['uniqueId']; ?> </p>
                            </div>
                            
                            <div class="product-details__inner">
                             
                                <div class="product-details__buttons-boxes">
                                    <div class="product-details__buttons-1">
                                        <a href="wishlist.html" class="thm-btn">Request Machine<span class="icon-right-arrow"></span>
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
                            <li data-tab="#additional-information" class="tab-btn active-btn"><span>Product Specs</span></li>
                            <li data-tab="#description" class="tab-btn"><span>Description</span></li>
                           
                        </ul>
                        <div class="tabs-content">

                        <!--tab-->
                            <div class="tab active-tab" id="additional-information">
                                <div class="product-details__tab-content-inner">
                                    <div class="product-details__additional-information-content">
                                        <div class="product-description__list">
                                            <ul class="list-unstyled">
                                                <?php 
                                                
                                                $uniqueId = $row['uniqueId'];

                                                $specSql = "SELECT * FROM productspecs WHERE uniqueId = :uniqueId";
                                                $specSmtp = $pdo->prepare($specSql);
                                                $specSmtp->execute([
                                                    ':uniqueId' => $uniqueId
                                                ]);

                                                while($specRow = $specSmtp->fetch(PDO::FETCH_ASSOC)){ ?>

                                                <div>
                                                     <li>
                                                        <p><span class="icon-right-arrow"></span> <?php echo $specRow['specheader']; ?></p>
                                                    </li>
                                                          <p style="padding-left: 35px !important;"><?php echo $specRow['specDiscription']; ?></p>
                                               
                                                </div>

                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="description">
                                <div class="product-details__tab-content-inner">
                                    <div class="product-details__description-content">
                                        <p class="product-details__description-text-1"><?php echo $row['Discription']; ?></p>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Shop Details End-->

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
                        <?php while($row2 = $smtp2->fetch(PDO::FETCH_ASSOC)){ ?>
                        <div class="item" onclick="window.location.href='product.php?main=<?php echo urlencode($row2['MainCategory']); ?>&mainID=<?php echo urlencode($row2['MainCategory']); ?>&sub=<?php echo urlencode($row2['SubCategory']); ?>&subID=<?php echo urlencode($row2['SubCategory']); ?>'">
                            <div class="single-product-style1">
                                <div class="single-product-style1__img">
                                    <img src="<?php echo 'Images/ProductImages/'.$row2['Image']; ?>" alt="" height="390px" >
                                    <img src="<?php echo 'Images/ProductImages/'.$row2['Image']; ?>" alt="" height="390px" >
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
                                                $words = explode(' ', trim($row2['ProductName']));
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