<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();

if (!isset($_SESSION['userEmail'])) {
    header("Location: index.php");
    exit();
}

require 'vendor/autoload.php';
require './GoogleConfig.php';



require './DB/config.conn.php';
$userMail = $_SESSION['userEmail'];

// get All Tickets
$sqlAll = "SELECT * FROM tickets WHERE userMail = :userMail";
$smtpAll = $pdo->prepare($sqlAll);
$smtpAll->execute([
    ':userMail' => $userMail
]);


$sqlclosed = "SELECT * FROM tickets WHERE userMail = :userMail AND status = 2 ";
$smtpClosed = $pdo->prepare($sqlclosed);
$smtpClosed->execute([
    ':userMail' => $userMail
]);

$sqlOpend = "SELECT * FROM tickets WHERE userMail = :userMail AND status != 2 ";
$smtpOpend = $pdo->prepare($sqlOpend);
$smtpOpend->execute([
    ':userMail' => $userMail
]);

// getting departments
$depSql = "SELECT * FROM `departments`";
$smtpDep = $pdo->prepare($depSql);
$smtpDep->execute();




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
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="./assets/css/DataTables.css">
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
                    <h2>MCS Ticketing System</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <li>User Tickets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->


         <!-- Pricing Two Start -->
        <section class="pricing-two">
          
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Mcs Tickets</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    
                </div>
                <div class="pricing-two__main-tab-box tabs-box">
                    <ul class="tab-buttons list-unstyled" style="width: 55% !important;">
                        <li data-tab="#new" class="tab-btn active-btn"><span>Create a Ticket</span>
                        </li>
                        <li data-tab="#ongoing" class="tab-btn "><span>Ongoing Tickets</span></li>
                        <li data-tab="#closed" class="tab-btn"><span>Closed Tickets</span></li>
                        <li data-tab="#all" class="tab-btn"><span>All Tickets</span></li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab " id="new">



                        <div class="container">
                <div class="row">
                    <div class="col-12"> <!-- changed from col-xl-8 col-lg-6 to col-12 -->
                        <div class="billing_details">
                        
                            <form class="billing_details_form w-100" id="myForm" enctype="multipart/form-data"> <!-- added w-100 just in case -->



                                <div class="row">
    <div class="col-xl-12">
        <div class="billing_input_box">
            <div class="select-box">
                <select class="wide" name="department" id="department">
                    <option data-display="Select Department">Select Department</option>

                    <?php while ($row = $smtpDep->fetch(PDO::FETCH_ASSOC)): ?>
                            <option value="<?php echo $row['depId']; ?>"><?php echo $row['depName']; ?></option>
                        <?php endwhile; ?>

                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="billing_input_box">
            <div class="select-box">
                <select class="wide" name="urgency" id="urgency">
                    <option data-display="Select urgency">Select Urgency</option>
                    <option valur="Very Urgent" >Very Urgent</option>
                    <option valur="Urgent" >Urgent</option>
                    <option valur="Not Urgent" >Not Urgent</option>
                </select>
            </div>
        </div>
    </div>
</div>



                                <div class="row">
                                    <div class="col-12">
                                        <div class="billing_input_box">
                                            <input type="text" name="title" placeholder="Ticket Title" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="billing_input_box">
                                            <textarea placeholder="Ticket Discription" name="discription" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="billing_input_box" style="display: flex; align-items: center;">
                                            <label class="custom-file">
                                                <input type="file" id="fileInput" name="attachment" style="display: none;" >
                                                <span>Attachments</span>
                                            </label>

                                            <!-- Image preview (small) -->
                                            <a href="#" id="previewLink" data-lightbox="image-preview" style="display:none;">
                                                <img id="previewImg" src=""
                                                    style="width:50px;height:50px;margin-left:15px;border-radius:5px;object-fit:cover;cursor:pointer;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="billing_details_form-btns">
                                            <div class="billing_details_form-btn-1">
                                                <button type="submit" class="thm-btn">Create Tickt<span class="icon-right-arrow"></span></button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




     

                            
                        </div>
                        <!-- ongoing tickets -->
                        <div class="tab " id="ongoing">
                       <div class="container">
                <div class="table-responsive">
                    <table class="table wishlist-table" id="myTable2" >
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Attachments</th>
                                <th>Date</th>
                                <th>Urgany</th>
                                <th>Status</th>
                                <th>Chat</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php while($openRow = $smtpOpend->fetch(PDO::FETCH_ASSOC)){ ?>

                                <tr >
                                <td style="font-size: 18px !important;" ><?php echo $openRow['ticketTitle']; ?></td>
                                <td style="font-size: 18px !important; max-width: 290px !important;" ><?php echo $openRow['ticketDiscription']; ?></td>
                                <td>
                                    <?php if($openRow['attachment'] == null || $openRow['attachment'] == 'NULL'){ ?>
                                        <span style="font-size: 18px !important;"  >No attachment</span>
                                        <?php } else { ?>
                                            <img src="<?php echo './Images/Ticket/'.$openRow['attachment']; ?>" width="30px" height="30px" alt="">
                                            <?php } ?>
                                </td>
                                <td style="font-size: 18px !important;">
                                    <?php echo date('Y-m-d', strtotime($openRow['createdDate'])); ?>
                                </td>
                                <td style="font-size: 18px !important;" >
                                    <?php if($openRow['urgancy'] == 'Very Urgent' ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ffbb00ff;color: #000000ff;">Very Urgent</span>
                                    <?php }elseif($openRow['urgancy'] == 'Urgent' ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #d1ff02ff;color: #000000ff;" >Urgent</span>
                                    <?php }elseif($openRow['urgancy'] == 'Not Urgent' ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #27ff27ff;color: #000000ff;" >Not Urgent</span>
                                    <?php } ?>
                                        
                                </td>
                                <td style="font-size: 18px !important;" >
                                    <?php if($openRow['status'] == 0 ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #48ff00ff;color: #000000ff;">Created</span>
                                    <?php }elseif($openRow['status'] == 1 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #eeff02ff;color: #000000ff;" >Processing</span>
                                    <?php }elseif($openRow['status'] == 2 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ff5227ff;color: #000000ff;" >Closed</span>
                                    <?php } ?>
                                        
                                </td>
                                <td style="font-size: 18px !important;" >
                                    
                              
                                <div class="main-menu-two__btn-box" >
                            <a href="./openChant?ticketId=<?php echo $openRow['ticketId']; ?>"  class="thm-btn">
                                Open Chat
                            </a>
                        </div>
                                
                                </td>
                            </tr>

                            <?php } ?>
                        

                           
                        </tbody>
                    </table>
                </div>

                
            </div>
                        </div>
                        <!-- closed tickets -->
                        <div class="tab" id="closed">
                             <div class="container">
                <div class="table-responsive">
                    <table class="table wishlist-table" id="myTable2" >
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Attachments</th>
                                <th>Date</th>
                                <th>Urgany</th>
                                <th>Status</th>
                                <th>Chat</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php while($closedRow = $smtpClosed->fetch(PDO::FETCH_ASSOC)){ ?>

                                <tr >
                                <td style="font-size: 18px !important;" ><?php echo $closedRow['ticketTitle']; ?></td>
                                <td style="font-size: 18px !important; max-width: 290px !important;" ><?php echo $closedRow['ticketDiscription']; ?></td>
                                <td>
                                    <?php if($closedRow['attachment'] == null || $closedRow['attachment'] == 'NULL'){ ?>
                                        <span style="font-size: 18px !important;"  >No attachment</span>
                                        <?php } else { ?>
                                            <img src="<?php echo './Images/Ticket/'.$closedRow['attachment']; ?>" width="30px" height="30px" alt="">
                                            <?php } ?>
                                </td>
                                <td style="font-size: 18px !important;">
                                    <?php echo date('Y-m-d', strtotime($closedRow['createdDate'])); ?>
                                </td>
                                <td style="font-size: 18px !important;" >
                                    <?php if($closedRow['urgancy'] == 'Very Urgent' ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ffbb00ff;color: #000000ff;">Very Urgent</span>
                                    <?php }elseif($closedRow['urgancy'] == 'Urgent' ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #d1ff02ff;color: #000000ff;" >Urgent</span>
                                    <?php }elseif($closedRow['urgancy'] == 'Not Urgent' ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #27ff27ff;color: #000000ff;" >Not Urgent</span>
                                    <?php } ?>
                                        
                                </td>
                                <td style="font-size: 18px !important;" >
                                    <?php if($closedRow['status'] == 0 ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #48ff00ff;color: #000000ff;">Created</span>
                                    <?php }elseif($closedRow['status'] == 1 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #eeff02ff;color: #000000ff;" >Processing</span>
                                    <?php }elseif($closedRow['status'] == 2 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ff5227ff;color: #000000ff;" >Closed</span>
                                    <?php } ?>
                                        
                                </td>
                                <td style="font-size: 18px !important;" >
                                    
                              
                                <div class="main-menu-two__btn-box" >
                            <a href="./openChant?ticketId=<?php echo $closedRow['ticketId']; ?>"  class="thm-btn">
                                Open Chat
                            </a>
                        </div>
                                
                                </td>
                            </tr>

                            <?php } ?>
                        

                           
                        </tbody>
                    </table>
                </div>

                
            </div>
                        </div>

                        <div class="tab" id="all">
                            

                        <div class="container">
                <div class="table-responsive">
                    <table class="table wishlist-table" id="myTable" >
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Attachments</th>
                                <th>Date</th>
                                <th>Urgany</th>
                                <th>Status</th>
                                <th>Chat</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php while($allRow = $smtpAll->fetch(PDO::FETCH_ASSOC)){ ?>

                                <tr >
                                <td style="font-size: 18px !important;" ><?php echo $allRow['ticketTitle']; ?></td>
                                <td style="font-size: 18px !important; max-width: 290px !important;" ><?php echo $allRow['ticketDiscription']; ?></td>
                                <td>
                                    <?php if($allRow['attachment'] == null || $allRow['attachment'] == 'NULL'){ ?>
                                        <span style="font-size: 18px !important;"  >No attachment</span>
                                        <?php } else { ?>
                                            <img src="<?php echo './Images/Ticket/'.$allRow['attachment']; ?>" width="30px" height="30px" alt="">
                                            <?php } ?>
                                </td>
                                <td style="font-size: 18px !important;">
                                    <?php echo date('Y-m-d', strtotime($allRow['createdDate'])); ?>
                                </td>
                                <td style="font-size: 18px !important;" >
                                    <?php if($allRow['urgancy'] == 'Very Urgent' ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ffbb00ff;color: #000000ff;">Very Urgent</span>
                                    <?php }elseif($allRow['urgancy'] == 'Urgent' ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #d1ff02ff;color: #000000ff;" >Urgent</span>
                                    <?php }elseif($allRow['urgancy'] == 'Not Urgent' ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #27ff27ff;color: #000000ff;" >Not Urgent</span>
                                    <?php } ?>
                                        
                                </td>
                                <td style="font-size: 18px !important;" >
                                    <?php if($allRow['status'] == 0 ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #48ff00ff;color: #000000ff;">Created</span>
                                    <?php }elseif($allRow['status'] == 1 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #eeff02ff;color: #000000ff;" >Processing</span>
                                    <?php }elseif($allRow['status'] == 2 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ff5227ff;color: #000000ff;" >Closed</span>
                                    <?php } ?>
                                        
                                </td>
                                <td style="font-size: 18px !important;" >
                                    
                              
                                <div class="main-menu-two__btn-box" >
                            <a href="./openChant?ticketId=<?php echo $allRow['ticketId']; ?>"  class="thm-btn">
                                Open Chat
                            </a>
                        </div>
                                
                                </td>
                            </tr>

                            <?php } ?>
                        

                           
                        </tbody>
                    </table>
                </div>

                
            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Two End -->




        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>






       



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
    <script src="./Functions/CreateTicket.js"></script>


            


</body></html>