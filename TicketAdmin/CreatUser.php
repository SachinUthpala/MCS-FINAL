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
<body class="sidebar-fixed">
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
              Mcs Ticket User Settings
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          All Users
                        </p>
                        <h2>54000</h2>
                        <label class="badge badge-outline-success badge-pill">100% From Total</label>
                      </div>
                     
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Super Admins
                        </p>
                        <h2>54000</h2>
                        <label class="badge badge-outline-success badge-pill">100% From Total</label>
                      </div>

                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Department Admins
                        </p>
                        <h2>54000</h2>
                        <label class="badge badge-outline-success badge-pill">100% From Total</label>
                      </div>

                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Department Users
                        </p>
                        <h2>54000</h2>
                        <label class="badge badge-outline-success badge-pill">100% From Total</label>
                      </div>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create New User</h4>
                  <form class="cmxform" id="signupForm" method="post" action="./BackEnd/CreateUser.php">
                    <fieldset>
                      
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" class="form-control" name="username" type="text">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email">
                      </div>

                      <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password">
                      </div>
                    
                      

                      <div class="form-group">
                      <label for="selectDep">Department</label>
                        <select class="form-control" name="Department" id="selectDep">

                        <?php while ($row = $smtpDep->fetch(PDO::FETCH_ASSOC)): ?>
                            <option value="<?php echo $row['depId']; ?>"><?php echo $row['depName']; ?></option>
                        <?php endwhile; ?>

                            <option value="1">Admin For All</option>
                            
                        </select>
                      </div>

                      <div class="form-group">
                      <label for="AdmintYPE">Admin Type</label>
                        <select class="form-control" name="adminType" id="AdmintYPE">
                            <option value="3" >Super Admin</option>
                            <option value="2" >Admin</option>
                            <option value="1" >Normal</option>
                        </select>
                      </div>

                      <input class="btn btn-primary" type="submit" value="Create User">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
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
  <script src="./Functions/AddUser.js"></script>

  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:56 GMT -->
</html>
