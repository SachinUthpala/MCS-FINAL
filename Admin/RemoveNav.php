<?php 

require '../DB/config.conn.php';
session_start();


if (!isset($_SESSION['userEmail'])) {
    header("Location: ../index.php");
    exit();
}



$sql = "SELECT * FROM main_navigation";
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
<link rel="stylesheet" href="./css/DataTables.css">

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
                            <li>Remove Navigation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Checkout Page-->
     <!--Start Cart Page-->
        <section class="wishlist-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table wishlist-table" id="myTable" >
                        <thead>
                            <tr>
                                <th>Main Nav</th>
                                <th>Nav Code</th>
                                <th>No. Of SubNavs</th>
                                <th>Remove  Subnavs</th>
                                <th>Remove MainNav</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php while($row  = $smtp->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                            <td>
<?php
$words = explode(" ", $row['nav_name']); // split words
for ($i = 0; $i < count($words); $i++) {
    echo $words[$i] . " ";
    if (($i + 1) % 2 == 0) { // after every 2 words
        echo "<br>";
    }
}
?>
</td>
                            <td><?php echo $row['nav_code']; ?></td>

                            <td>

                            <?php 
                            
                            $subNavId = $row['nav_code'];
                            $sql2 = "SELECT COUNT(*) as subnav_count FROM sub_navigation WHERE nav_code = :main_nav_code";
                            $smtp2 = $pdo->prepare($sql2);
                            $smtp2->bindParam(':main_nav_code', $subNavId, PDO::PARAM_STR);
                            $smtp2->execute();
                            $subnavCount = $smtp2->fetch(PDO::FETCH_ASSOC)['subnav_count'];
                            echo $subnavCount;
                            ?>

                            </td>

                            <td>
                                <div class="main-menu-two__btn-box">
                                    <button class="thm-btn" style="border: none !important;background: #ff0141ff !important;">Delete SubNav</button>
                                </div>
                            </td>
                            <td>
                                    <button 
                                        class="thm-btn delete-btn"
                                        data-id="<?= $row['id']; ?>"
                                        style="border: none !important;background: #ff0101ff !important;">
                                        Delete
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


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="images/logo-2.png" width="150" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@techguru.com</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>

    <!-- page functions -->

    <!-- SubNav Delete Modal -->
<div class="modal" id="subNavModal" tabindex="-1" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; justify-content:center; align-items:center;">
    <div class="modal-content " style=" padding:20px; border-radius:8px; max-width:500px; width:90%;background-color: #000000c9;">
        <h4>Sub Navigations</h4>
        <br>
        <table id="subNavList" class="table" style="width:100%;">
    <thead>
        <tr>
            <th>Sub Navigation Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Sub navigation rows will be added here dynamically -->
    </tbody>
</table>
        <div class="main-menu-two__btn-box" style="text-align:right; margin-top:15px;">
            <button class="thm-btn" id="closeModal" style=" border:none; border-radius:5px;">Close</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./Functions/DeleteNav.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

    const modal = document.getElementById("subNavModal");
    const subNavList = document.getElementById("subNavList");
    const closeModal = document.getElementById("closeModal");

    // Attach click event to all Delete SubNav buttons
    document.querySelectorAll(".thm-btn").forEach(button => {
        if(button.textContent.includes("Delete SubNav")){
            button.addEventListener("click", function(e){
                e.preventDefault();

                // Get main navigation code from the row
                const row = button.closest("tr");
                const navCode = row.querySelector("td:nth-child(2)").textContent;

                // Fetch sub navigation list via AJAX
                fetch("./BackEnd/GetSubNavs.php?nav_code=" + navCode)
                .then(res => res.json())
                .then(data => {
                    // Clear old list
                    subNavList.innerHTML = "";

                    if(data.length === 0){
                        subNavList.innerHTML = "<li>No sub navigations found</li>";
                    } else {
                        data.forEach(sub => {
    // Create table row
    let tr = document.createElement("tr");

    tr.innerHTML = `
        <td style="color:#fff;">${sub.sub_name}<br></td>
        <td class="main-menu-two__btn-box">
            <button class="deleteSubBtn thm-btn" data-subid="${sub.id}" 
                style=" background:red; color:#fff; border:none; border-radius:4px;padding:8px 12px;">
                Delete
            </button>
        </td>
        <br>
    `;

    subNavList.appendChild(tr);
});


                        // Attach delete functionality
                        document.querySelectorAll(".deleteSubBtn").forEach(btn => {
                            btn.addEventListener("click", function(){
                                const subId = this.dataset.subid;

                                fetch("./BackEnd/DeleteSubNav.php", {
                                    method:"POST",
                                    headers: {"Content-Type":"application/x-www-form-urlencoded"},
                                    body: "sub_id=" + subId
                                })
                                .then(res=>res.text())
                                .then(msg=>{
                                    Toastify({
                                        text: msg,
                                        duration: 3000,
                                        close: true,
                                        gravity: "top",
                                        position: "right",
                                        background: "linear-gradient(270deg, #FA5674 0%, #6065D4 100%)",
                                        callback: function() {
                                            // reload after toast disappears
                                            location.reload();
                                        }
                                    }).showToast();

                                    // Remove deleted item from list
                                    btn.parentElement.remove();
                                    
                                });
                               
                            });
                        });
                    }

                    // Show modal
                    modal.style.display = "flex";
                });
            });
        }
    });

    // Close modal
    closeModal.addEventListener("click", function(){
        modal.style.display = "none";
    });
});

</script>
     

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


</body></html>