<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();


require 'vendor/autoload.php';
require './GoogleConfig.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login || MCS Software Engineering  </title>
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
    <style>
    .password-mask {
        -webkit-text-security: disc; /* Chrome, Edge, Safari */
        text-security: disc;         /* Future support */
    }
</style>
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
                    <h2>Login</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li>Login to MCS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Login One-->
        <section class="sign-up-one">
            <div class="container">
                <div class="sign-up-one__form">
                    <div class="inner-title text-center">
                        <h2>Log In</h2>
                    </div>
                    <form id="sign-up-one__form" name="sign-up-one_form" action="#" method="post">
                        <div class="row">
                   
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="Email" id="formEmail" placeholder="Email..." required="" value="">
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box password-mask">
                                        <input type="text" name="Password" id="formPassword" placeholder="Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <button class="thm-btn" id="loginBtn" type="submit">Log In
    <span class="icon-right-arrow"></span>
</button>
                                </div>
                            </div>
                        </div>
                        <div class="google-facebook d-flex justify-content-center">
                            <a href="<?php echo $client->createAuthUrl(); ?>">
                                <div class="icon">
                                    <img src="./assets/images/icon-google-2.png" alt="Google">
                                </div>
                                Continue with Google
                            </a>
                            
                        </div>
                        <div class="create-account text-center">
                            <p>Don't you have an account? <a href="./SignUp.php">Register Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Login One-->


        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">




<?php


    if($_GET['ticketLogin'] == 1){
          echo '
    <script>
    Toastify({
      text: "Before Open a Ticket Plese Login",
      duration: 6000,
      newWindow: true,
      close: true,
      gravity: "top", // top or bottom
      position: "right", // left, center or right
      stopOnFocus: true, // Prevent dismissing on hover
      style: {
        background: "linear-gradient(to right, #d40047ff, #0043c0ff)",
      },
      onClick: function(){} 
    }).showToast();
    </script>
    ';
    }



    ?>



<script>
document.getElementById("sign-up-one__form").addEventListener("submit", function(e){
    e.preventDefault(); // stops page refresh

    let email = document.getElementById("formEmail").value.trim();
    let password = document.getElementById("formPassword").value.trim();

    // Send to backend using fetch
    fetch("BackEnd/login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "email=" + encodeURIComponent(email) +
              "&Password=" + encodeURIComponent(password)
    })
    .then(res => res.text())
    .then(result => {

        if(result.trim() === "success") {

            Toastify({
                text: "Login Successful!",
                gravity: "top",
                position: "right",
                style: {background: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)"}
            }).showToast();

            setTimeout(() => {
                window.location.href = "./index.php";
            }, 1200);

        } else {

            Toastify({
                text: result,  // Show backend message
                gravity: "top",
                position: "right",
                style: {background: "linear-gradient(270deg, #f8274eff 0%, #a70241ff 100%)"}
            }).showToast();

        }

    });
});
</script>


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