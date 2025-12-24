<?php


ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}



?>


<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up || MCS Software Engineering</title>
    <!-- favicons Icons -->
   <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-16x16.png">
	
	  <!--  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="MCS ">

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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

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

    <!-- tostify include -->
     

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
                            <li>SignUp to MCS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Sign Up One-->
        <section class="sign-up-one">
            <div class="container">
                <div class="sign-up-one__form">
                    <div class="inner-title text-center">
                        <h2>Sing Up</h2>
                    </div>
                    <form id="sign-up-one__form" name="sign-up-one_form" action="./BackEnd/Auth.Conn.php" method="post">
                        <div class="row">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName" placeholder="Name..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail" placeholder="Email..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" id="formPhone" placeholder="Phone..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box password-mask">
                                        <input type="text" name="form_password" id="formPassword" placeholder="Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box password-mask">
                                        <input type="text" name="form_password2" id="formPassword2" placeholder="Re Enter Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <small id="passwordMsg" style="color:#ff4d4d; display:none;text-align: center;"></small>
                            <br><br>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <button class="thm-btn" type="submit" name="Register" id="signUpBtn" data-loading-text="Please wait..." disabled> Sign UP
                                        <span class="icon-right-arrow"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="google-facebook d-flex justify-content-center">
                            <a href="https://www.google.com/">
                                <div class="icon">
                                    <img src="./assets/images/icon-google-2.png" alt="Google">
                                </div>
                                Continue with Google
                            </a>
                            
                        </div>
                        <div class="create-account text-center">
                            <p>Already have an account? <a href="./login.php">Login Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Sign Up One-->

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

        <!-- Bootstrap Modal -->
<div class="modal fade" id="inputModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered " >
    <div class="modal-content p-3 " style="background: #000000f8;">

      <div class="modal-header border-0">
        <h5 class="modal-title w-100 text-center">Enter Verification Code</h5>
        
      </div>

      <div class="modal-body text-center">

        <div class="otp-container d-flex justify-content-center gap-2">
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
        </div>

      </div>

      <div class="modal-footer border-0 d-flex justify-content-between">
      

                 <div class="text-end mt-2">
                                    <button  class="thm-btn" onclick="location.href='./index.php'" data-bs-dismiss="modal" style="background: #c7032dff; border:none; font-size:16px;">
                                        Skip Now
                                    </button>
                                </div>
        
         <div class="text-end mt-2">
                                    <button onclick="savePopupInput()" class="thm-btn" style="background: #001f85ff; border:none; font-size:16px;">
                                        Verify Mail
                                    </button>
                                </div>
      </div>

    </div>
  </div>
</div>



        <!--Site Footer Two Start-->
        <?php require './Components/Footer.php'; ?>
        <!--Site Footer Two End-->



        <script>
const password1 = document.getElementById("formPassword");
const password2 = document.getElementById("formPassword2");
const signUpBtn  = document.getElementById("signUpBtn");
const msg        = document.getElementById("passwordMsg");

// Password validation regex
const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{6,}$/;

function validatePasswords() {
    const p1 = password1.value;
    const p2 = password2.value;

    if (!passwordRegex.test(p1)) {
        msg.style.display = "block";
        msg.textContent = "Password must be at least 6 characters, contain one capital letter and one number.";
        signUpBtn.disabled = true;
        return;
    }

    if (p1 !== p2) {
        msg.style.display = "block";
        msg.textContent = "Passwords do not match.";
        signUpBtn.disabled = true;
        return;
    }

    if (passwordRegex.test(p1) && p1 == p2 ) {
        msg.style.display = "block";
        msg.style.color = "#00FF00";
        msg.textContent = "Passwords are Matching and Good to Go!";
        signUpBtn.disabled = false;
        return;

    }

    // // All good
    // msg.style.display = "none";
    // signUpBtn.disabled = false;
}

// Run validation on typing
password1.addEventListener("input", validatePasswords);
password2.addEventListener("input", validatePasswords);
</script>


<script>

function openInputPopup() {
    var popup = new bootstrap.Modal(document.getElementById('inputModal'));
    popup.show();
}


// Auto move to next box
document.querySelectorAll(".otp-input").forEach((input, index, inputs) => {
    input.addEventListener("input", () => {
        if (input.value.length === 1 && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });

    input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && index > 0 && !input.value) {
            inputs[index - 1].focus();
        }
    });
});

// Collect code
function savePopupInput() {
    let code = "";
    document.querySelectorAll(".otp-input").forEach(i => code += i.value);

    if (code.length !== 6) {

        Toastify({
            text: "Please enter all 6 digits",
            gravity: "top",
            position: "center",
            style: { background: "linear-gradient(270deg, #f8274eff 0%, #a70241ff 100%)" }
        }).showToast();

        return;
    }

    fetch("BackEnd/verifyCode.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "code=" + encodeURIComponent(code)
    })
    .then(response => response.text())
    .then(result => {

        if (result.trim() === "success") {
            Toastify({
                text: "Verification Complete",
                gravity: "top",
                position: "right",
                style: { background: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)" }
            }).showToast();

            // Optional redirect
            setTimeout(() => window.location.href = "./index.php", 1500);
        }else {
            Toastify({
                text: "Enter Valid Code",
                gravity: "top",
                position: "right",
                style: { background: "linear-gradient(270deg, #f8274eff 0%, #a70241ff 100%)" }
            }).showToast();
        }

    })
    .catch(error => console.error("Error:", error));
}



document.addEventListener("DOMContentLoaded", function () {

    $("#sign-up-one__form").on("submit", function (e) {
        e.preventDefault();

        let form = $(this);
        let submitBtn = $("#signUpBtn");

        submitBtn.addClass("loading").text("Processing...");

        $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: form.serialize(),
            dataType: "json",  // <-- IMPORTANT
            success: function (res) {
                submitBtn.removeClass("loading").text("Sign Up");

                Toastify({
                    text: res.message, // <-- use JSON message
                    duration: 4000,
                    gravity: "top",
                    position: "right",
                    style: { background: res.status === "success" ? "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)" : "linear-gradient(270deg, #f8274eff 0%, #a70241ff 100%)" }
                }).showToast();

                if (res.status === "success") {
                    openInputPopup();
                    // window.location.href = res.redirect; // redirect safely
                }
            },
            error: function () {
                submitBtn.removeClass("loading").text("Sign Up");

                Toastify({
                    text: "Something went wrong!",
                    duration: 4000,
                    gravity: "top",
                    position: "right",
                    style: { background: "red" }
                }).showToast();

                openInputPopup(); //remove me loanch
            }
        });
    });

});
</script>





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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

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