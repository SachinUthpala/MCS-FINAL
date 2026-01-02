<?php

require '../DB/config.conn.php';

// getting departments
$depSql = "SELECT * FROM `departments`";
$smtpDep = $pdo->prepare($depSql);
$smtpDep->execute();

?>
<!DOCTYPE html>
<html lang="en">


<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MCS Ticket || Create User</title>
 
  <link rel="stylesheet" href="./vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">
  <
  <link rel="stylesheet" href="./css/style.css">
<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-16x16.png">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">



</head>
<body class="sidebar-fixed" >
  <div class="container-scroller">
    <!-- partial:./partials/_navbar.html -->
    <?php  require './Components/TopHeader.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <?php  require './Components/Sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span style="color: #ff9900ff;">User : </span> Sachin@gmail.com || <span style="color: #ff9900ff;" >Department : </span> Department 1
            </h3>
          </div>
          

         
          
            
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 <a href="" target="_blank">MCS</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <script src="./vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/misc.js"></script>
  <script src="./js/settings.js"></script>
  <script src="./js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  
<script src="./js/file-upload.js"></script>
  <script src="./js/typeahead.js"></script>
  <script src="./js/select2.js"></script>
  <!-- <script src="./Functions/AddUser.js"></script> -->

  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:56 GMT -->
</html>
