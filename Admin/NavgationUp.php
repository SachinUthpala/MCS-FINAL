<?php

require '../DB/config.conn.php';
session_start();


if (!isset($_GET['NavCode']) || empty($_GET['NavCode'])) {
    
    header("Location: ./UpdateNav.php");
    exit();
}

$navCode = $_GET['NavCode'];

$sql = "SELECT * FROM main_navigation WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$navCode]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MCS Admin Panel</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="IT Solutions & Technology HTML Template ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/custom-animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/font-awesome-all.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/jquery.magnific-popup.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/twentytwenty.css">


    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/sliding-text.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/process.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/brand.css">
    <link rel="stylesheet" href="css/newsletter.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/why-choose.css">
    <link rel="stylesheet" href="css/page-header.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/sliding-text.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/process.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/brand.css">
    <link rel="stylesheet" href="css/newsletter.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/why-choose.css">
    <link rel="stylesheet" href="css/page-header.css">
    <link rel="stylesheet" href="css/error.css">

    <!-- template styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <!-- Toastify CSS -->
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
       
    <!-- header start -->
     <?php require './Components/Header.php'; ?>
     <!-- header end -->

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(images/dev.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>MCS Navigation Changes</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li><a href="">Admin</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li>Update Navigation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Checkout Page-->
        <section class="checkout-page">
    <div class="container">
        <div class="row">
            <div class="col-12"> <!-- changed from col-xl-8 col-lg-6 to col-12 -->
                <div class="billing_details">
                    <div class="billing_title">
                       
                        <h2>Update Product Navigation</h2>
                    </div>
                    <form class="billing_details_form w-100" id="myForm"> <!-- added w-100 just in case -->

                    <input type="hidden" name="UniqueId" value="<?php echo $result['nav_code']; ?>">
                      



                        <div class="row">
                            <div class="col-12">
                                <div class="billing_input_box">
                                    <input type="text" name="MainNav" value="<?php echo $result['nav_name']; ?>" placeholder="Main Navigation Name" required>
                                </div>
                            </div>
                        </div>

                        <br>

                        <h4>Update Exsisting Sub Navigations</h4>
                        <hr>


                        <?php 
                        
                        $navCode = $result['nav_code'];
                        $sqlSubNav = "SELECT * FROM  sub_navigation WHERE nav_code = ?";
                        $stmtSubNav = $pdo->prepare($sqlSubNav);
                        $stmtSubNav->execute([$navCode]);
                  
                        while ($subNav = $stmtSubNav->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="SubNavExisting[]" value="<?php echo $subNav['sub_name']; ?>" placeholder="Sub Navigation Name" required>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                        ?>

                        <h4>Add New Sub Navigations</h4>
                        <hr>

                        <div class="main-menu-two__btn-box">
  <button type="button" class="thm-btn" id="addSubNavBtn" style="border: none !important;">
    Add New Sub Navigations
  </button>
</div>
                     

                     <!-- Sub Navigations Container -->
<br>
<div id="subNavContainer"></div>

<br>
<div class="text-end mt-2">
  <!-- Remove last should also be a button-->
  <button type="button" id="removeLastBtn" class="thm-btn" style="background:red; border:none; font-size:12px; display:none;">
    Remove Last
  </button>
</div>



                 

              

                        <div class="row">
                            <div class="col-12">
                                <div class="billing_details_form-btns">
  <div class="billing_details_form-btn-1">
    <button type="submit" class="thm-btn">Update Navigation<span class="icon-right-arrow"></span></button>
  </div>
  <div class="billing_details_form-btn-2">
    <!-- set to reset so the form doesn't POST -->
    <button type="reset" id="resetFormBtn" class="thm-btn">Reset<span class="icon-right-arrow"></span></button>
  </div>
</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </section>

        <!--End Checkout Page-->


    <?php require './Components/Footer.php'; ?>
    </div><!-- /.page-wrapper -->


    <?php require './Components/MobileNav.php'; ?>
    <!-- /.mobile-nav__wrapper -->

    

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>

    <!-- page functions -->
     <script src="./Functions/UpdateNavigation.js"></script>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/wNumb.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/twentytwenty.js"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/marquee.min.js"></script>
    <script src="js/jquery.circleType.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.lettering.min.js"></script>
    <script src="js/typed-2.0.11.js"></script>
    <script src="js/jquery-sidebar-content.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/countdown.min.js"></script>




    <script src="js/gsap.js"></script>
    <script src="js/ScrollTrigger.js"></script>
    <script src="js/SplitText.js"></script>




    <!-- template js -->
    <script src="js/script.js"></script>

    <!-- Toastify JS -->
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


</body></html>