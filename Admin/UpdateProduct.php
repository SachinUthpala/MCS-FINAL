<?php 

require '../DB/config.conn.php';
session_start();



if (!isset($_SESSION['userEmail'])) {
    header("Location: ../index.php");
    exit();
}


$sql = "SELECT * FROM products";
$smtp = $pdo->prepare($sql);
$smtp->execute();




?>

<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MCS Admin Panel</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    
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
<link rel="stylesheet" href="./css/DataTables.css">
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/css/lightbox.min.css" rel="stylesheet">

<style>
    .desc-short {
    position: relative;
    cursor: pointer;
}

.desc-short:hover::after {
    content: attr(title);
    position: absolute;
    top: 20px;
    left: 0;
    white-space: normal;
    width: 100%;
    background: #333;
    color: #fff;
    padding: 8px 10px;
    border-radius: 6px;
    font-size: 12px;
    z-index: 100000000;
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
       
    <!-- header start -->
     <?php require './Components/Header.php'; ?>
     <!-- header end -->

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(images/slider-2-2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>MCS Product Changes</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li><a href="">Admin</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li>Update Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Checkout Page-->
        
     <!--Start Cart Page-->
        <section class="wishlist-page" >
            <h3 class="text-center">Update Products</h3>
            
            <br>
            <div class="container">
                <div class="table-responsive">
                    <table class="table wishlist-table" id="myTable">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Discription</th>
                                <th>Image</th>
                                <th>Main Category</th>
                                <th>Sub Category</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php while($row  = $smtp->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                            <td>
                                <?php
                                $words = explode(" ", $row['ProductName']); // split words
                                for ($i = 0; $i < count($words); $i++) {
                                    echo $words[$i] . " ";
                                    if (($i + 1) % 2 == 0) { // after every 2 words
                                        echo "<br>";
                                    }
                                }
                                ?>
                            </td>

                            <td>
                                <?php 
                                $full = $row['Discription'];
                                $words = explode(" ", $full);
                                $short = implode(" ", array_slice($words, 0, 8));

                                if (count($words) > 8) {
                                    $short .= "...";
                                }
                                ?>

                                <span class="desc-short" title="<?= htmlspecialchars($full) ?>">
                                    <?= htmlspecialchars($short) ?>
                                </span>
                            </td>

                            <td>
                                <a href="<?php echo '../Images/ProductImages/'.$row['Image']; ?>" data-lightbox="product-gallery">
                                    <img src="<?php echo '../Images/ProductImages/'.$row['Image']; ?>" 
                                        alt="" height="50px">
                                </a>
                            </td>


                            <td>
                                <?php 
                                
                                $MainNav = $row['MainCategory'];
                                $MainSql = "SELECT  nav_name FROM `main_navigation` WHERE `nav_code` = :nav_code";
                                $smtpMain = $pdo->prepare($MainSql);
                                $smtpMain->execute([
                                    ':nav_code' => $MainNav
                                ]);

                                $mainRowNav = $smtpMain->fetch(PDO::FETCH_ASSOC);

                                $words = explode(" ", $mainRowNav['nav_name']); // split words
                                for ($i = 0; $i < count($words); $i++) {
                                    echo $words[$i] . " ";
                                    if (($i + 1) % 2 == 0) { // after every 2 words
                                        echo "<br>";
                                    }
                                }
 
                                ?>
                            </td>


                            <td>
                                <?php 
                                
                                $subNav = $row['SubCategory'];
                                $subSql = "SELECT  sub_name FROM `sub_navigation` WHERE `id` = :nav_code";
                                $smtpsub = $pdo->prepare($subSql);
                                $smtpsub->execute([
                                    ':nav_code' => $subNav
                                ]);

                                $subRowNav = $smtpsub->fetch(PDO::FETCH_ASSOC);

                                $words = explode(" ", $subRowNav['sub_name']); // split words
                                for ($i = 0; $i < count($words); $i++) {
                                    echo $words[$i] . " ";
                                    if (($i + 1) % 2 == 0) { // after every 2 words
                                        echo "<br>";
                                    }
                                }
 
                                ?>
                            </td>
                            <td>
                                
                                    <button 
                                        class="thm-btn delete-btn"
                                        onclick="location.href='./UpdateProductItem.php?ProductId=<?php echo urlencode($row['productId']); ?>'"
                                        style="border: none !important;background: #ff0101ff !important;">
                                        Update
                                    </button>
                            </td>

                            

                            
                            
                        </tr>
                        
                        <?php } ?>

                           
                        </tbody>
                    </table>
                </div>

                
            </div>
        </section>
        <!--End Cart Page-->
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


        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
$(document).ready(function(){
    $('#myTable').DataTable({
        "pageLength": 5,
        info: false
    });

    // Add placeholder to search input
    $('#myTable_filter input').attr('placeholder', 'Search...');
});
</script>
     




     

  
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
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/js/lightbox.min.js"></script>

</body></html>