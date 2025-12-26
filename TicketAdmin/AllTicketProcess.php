<?php

require '../DB/config.conn.php';

// getting departments
$sql = "SELECT * FROM `tickets` WHERE status != 2";
$smtp = $pdo->prepare($sql);
$smtp->execute();


//special calculation for cards
$totalTickets = $smtp->rowCount();

//open tickets
$sql2 = "SELECT * FROM `tickets` WHERE status != 2 ";
$smtp2 = $pdo->prepare($sql2);
$smtp2->execute();

$totalTicketsProcess = $smtp2->rowCount();
//closed tickets

$sql23 = "SELECT * FROM `tickets` WHERE status = 2 ";
$smtp23 = $pdo->prepare($sql23);
$smtp23->execute();

$totalTicketsClosed = $smtp23->rowCount();

//close ticket


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
                          All Tickets
                        </p>
                        <h2><?php echo $totalTickets; ?></h2>
                        
                      </div>
                     
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Ongoing Tickets
                        </p>
                        <h2><?php echo $totalTicketsProcess; ?></h2>
                        
                      </div>

                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Closed Tickets
                        </p>
                        <h2><?php echo $totalTicketsClosed; ?></h2>
                        
                      </div>

                      
                     
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- data table comes here -->

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Created Date</th>
                            <th>Department</th>
                            <th>Status</th>
                           
                            <th>Title</th>
                            <th>PDiscription</th>
                            <th>CreatedBy</th>
                            <th>See Chat</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                          $count = 1;
                          while($row = $smtp->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['createdDate']; ?></td>
                            <td>
                              <?php 

                              $departmentId = $row['DepartmentId'];

                              $sql2 = "SELECT depName FROM departments WHERE depId = :depId";
                              $smtp2 = $pdo->prepare($sql2);
                              $smtp2->bindParam(':depId', $departmentId);
                              $smtp2->execute();

                              $depRow = $smtp2->fetch(PDO::FETCH_ASSOC);
                              echo $depRow['depName'];

                              ?>
                            </td>
                            <td>

                            <?php if($row['status'] == 0 ) { ?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #48ff00ff;color: #000000ff;">Created</span>
                                    <?php }elseif($row['status'] == 1 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #eeff02ff;color: #000000ff;" >Processing</span>
                                    <?php }elseif($row['status'] == 2 ) {?>
                                        <span style="padding: 5px;border-radius: 5px;background-color: #ff5227ff;color: #000000ff;" >Closed</span>
                                    <?php } ?>

                            </td>
                            
                            <td><?php echo $row['ticketTitle']; ?></td>
                            <td><?php echo $row['ticketDiscription']; ?></td>
                            <td><?php echo $row['userMail']; ?></td>
                            <td><a href="TicketChat.php?ticketId=<?php echo $row['ticketId']; ?>"><button class="btn btn-primary py-2">See Chat</button></a></td>
                        </tr>
                        <?php 
                          $count++;
                          }
                        ?>
                        
                      </tbody>
                    </table>
                  </div>
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
 <script src="./js/data-table.js"></script>

  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:56 GMT -->
</html>
