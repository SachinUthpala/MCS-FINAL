<?php


session_start();

if (!isset($_SESSION['TicketuserEmail']) || !isset($_SESSION['TicketuserName'])) {
    header("Location: index.php");
    exit();
}



require '../DB/config.conn.php';

if (!isset($_GET['ticketId'])) {
    die("Invalid Ticket");
}

$ticketId = (int)$_GET['ticketId'];

/* ===== FETCH TICKET ===== */
$stmt = $pdo->prepare("SELECT * FROM tickets WHERE ticketId = ? LIMIT 1");
$stmt->execute([$ticketId]);
$ticket = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$ticket) {
    die("Ticket not found");
}

/* ===== FETCH USER IMAGE ===== */
$stmt = $pdo->prepare("SELECT userImg FROM users WHERE userEmail = ? LIMIT 1");
$stmt->execute([$ticket['userMail']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$userImg = $user['userImg'] ?? 'assets/images/default-avatar.png';

/* ===== FETCH ALL REPLIES (ONE QUERY) ===== */
$stmt = $pdo->prepare("
    SELECT sender, message, attachment, created_at
    FROM ticket_replies
    WHERE ticketId = ?
    ORDER BY created_at ASC
");
$stmt->execute([$ticketId]);
$replies = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MCS Ticket || Ticket Chat</title>

    <link rel="stylesheet" href="./vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-16x16.png">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="../assets/css/module-css/ChatSpec.css">





</head>

<body class="sidebar-fixed">
    <div class="container-scroller">
        <!-- partial:./partials/_navbar.html -->
        <?php require './Components/TopHeader.php' ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <?php require './Components/Sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">



                <div class="row">
           
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                      <div class="wrapper text-center">
                        <h4 class="card-title">Close Ticket</h4>
                        <p class="card-description">You can Close the ticket using this option!</p>
                        <button class="btn btn-outline-primary" onclick="closeTicketNow()">Close Ticket</button>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                      <div class="wrapper text-center">
                        <h4 class="card-title">Change Department</h4>
                        <p class="card-description">Change Ticket Assigned Department</p>
                        <button class="btn btn-outline-primary" onclick="showSwal('warning-message-and-cancel')">Change Department</button>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                      <div class="wrapper text-center">
                        <h4 class="card-title">Change Level</h4>
                        <p class="card-description">Change User Reply Level </p>
                        <button class="btn btn-outline-primary" onclick="showSwal('auto-close')">Change Level</button>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
          
          </div>


                


                    <div class="page-header" style="">



                    



                        <div class="container  rounded" style="margin-bottom: 30px !important; background:transparent;border:none !important;">
                            <div class="card" style="background-color: transparent;border:none !important;">
                                <div class="card-header text-center fw-bold" style="color: #000000ff; background-color: transparent;border:none !important;">
                                    <h4><?php echo $ticket['ticketTitle']; ?></h4>
                                </div>
                                <hr>
                                <br>



                                <div class="card-body chat-body" id="chatBody">

    <!-- Original Ticket -->
    <div class="d-flex align-items-start justify-content-end mb-4">
        <div class="bg-primary text-white p-2 rounded chat-message text-end">
            <?= htmlspecialchars($ticket['ticketDiscription']) ?>

            <?php if ($ticket['attachment'] !== 'NotAssign'): ?>
                <br>
                <img src="../Images/Ticket/<?= htmlspecialchars($ticket['attachment']) ?>"
                     class="chat-img"
                     onclick="showImage(this.src)">
            <?php endif; ?>
        </div>
        <img src="../<?= htmlspecialchars($userImg) ?>" class="avatar ms-2">
    </div>

    <!-- Replies -->
    <?php foreach ($replies as $reply): ?>

        <?php if ($reply['sender'] == 1): /* MCS */ ?>
            <div class="d-flex align-items-start mb-4">
                <img src="../assets/images/favicons/favicon-16x16.png" class="avatar me-2">
                <div class="  p-2 rounded chat-message" style="background-color: #660b31ff;margin-left: 10px !important;color: #ffffff !important;">
                    <?= htmlspecialchars($reply['message']) ?>

                    <?php if ($reply['attachment'] != 'NotAssign' ): ?>
                        <br>
                        <img src="../Images/Ticket/<?= htmlspecialchars($reply['attachment']) ?>"
                             class="chat-img"
                             onclick="showImage(this.src)">
                    <?php endif; ?>
                </div>
            </div>

        <?php else: /* USER */ ?>
            <div class="d-flex align-items-start justify-content-end mb-4">
                <div class="bg-primary text-white p-2 rounded chat-message text-end">
                    <?= htmlspecialchars($reply['message']) ?>

                    <?php if ($reply['attachment'] != 'NotAssign'): ?>
                        <br>
                        <img src="../Images/Ticket/<?= htmlspecialchars($reply['attachment']) ?>"
                             class="chat-img"
                             onclick="showImage(this.src)" style="margin-left: 10px !important;">
                    <?php endif; ?>
                </div>
                <img src="../<?= htmlspecialchars($userImg) ?>" class="avatar ms-2">
            </div>
        <?php endif; ?>

    <?php endforeach; ?>

</div>



                                <!-- Input -->
                                <div class="card-footer chat-input" style="background-color: #ffffff !important;">
                                    <br>
                                    <div class="input-group">
                                        <input type="file" id="imageInput" class="form-control d-none" accept="image/*">
                                        <button class="btn btn-outline-secondary" style="background-color: #7c7c7cff;" onclick="document.getElementById('imageInput').click()">
                                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                                        </button>
                                        <input type="text" id="messageInput" class="form-control" style="color: #000000ff !important;" placeholder="Type a message...">
                                        

                                        <a class="btn btn-primary" type="button" onclick="sendMessage()" style="margin-left: 10px !important;">Send</a>

                                    </div>
                                    <div id="imagePreview" class="mt-2"></div>
                                </div>

                            </div>
                        </div>



                        <div class="modal fade" id="imageModal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <img id="modalImage" src="" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:./partials/_footer.html -->
                    <footer class="footer" style="margin-top: 50px !important;">
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

        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
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

          <script src="./js/alerts.js"></script>
          <script src="./js/avgrund.js"></script>



        <script>



     const TICKET_ID = <?= (int)$ticketId ?>;

            const closeTicketNow = () => {
  swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    buttons: {
      cancel: {
        text: "Cancel",
        value: false,
        visible: true,
        className: "btn btn-danger",
        closeModal: true,
      },
      confirm: {
        text: "OK",
        value: true,
        visible: true,
        className: "btn btn-primary",
        closeModal: true
      }
    }
  }).then((isConfirmed) => {
    if (isConfirmed) {
      
        const CloseTicketForm = new FormData();
        CloseTicketForm.append('TicketId', TICKET_ID);



        fetch('./BackEnd/CloseTicket.php', {
                        method: 'POST',
                        body: CloseTicketForm
                    })
                    .then(res => res.text())
                    .then(response => {
                        Toastify({
                            text: response,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(270deg, #f8274e 0%, #2a31a8 100%)",
                            close: true
                        }).showToast();
                    })
                    .catch(err => {
                        Toastify({
                            text: "Error: " + err,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(270deg, #ff1640 0%, #b6022f 100%)",
                            close: true
                        }).showToast();
                    });


        

    } else {
      // ❌ NOT CONFIRMED / CANCELLED
      console.log("Action cancelled");
    }
  });
};



            const USER_ID = <?= (int)$ticketId ?>;
            function showImage(src) {
                document.getElementById("modalImage").src = src;
            }



            let selectedImage = null;

            /* ====== IMAGE PREVIEW ====== */
            document.getElementById('imageInput').addEventListener('change', function() {
                const file = this.files[0];
                if (!file) return;

                if (!file.type.startsWith('image/')) {
                    alert('Please select an image file');
                    this.value = '';
                    return;
                }

                selectedImage = file;

                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').innerHTML =
                        `<img src="${e.target.result}" class="chat-img">`;
                };
                reader.readAsDataURL(file);
            });

            /* ====== SHOW IMAGE IN MODAL ====== */
            function showImage(src) {
                document.getElementById('modalImage').src = src;
            }

            /* ====== SEND MESSAGE FUNCTION ====== */
            function sendMessage() {
                const messageInput = document.getElementById('messageInput');
                const chatBody = document.getElementById('chatBody');
                const message = messageInput.value.trim();

                if (message === '' && !selectedImage) return;

                let imageHTML = '';
                if (selectedImage) {
                    const imgURL = URL.createObjectURL(selectedImage);
                    imageHTML = `
            <br>
            <img src="${imgURL}"
                 class="chat-img"
     data-toggle="modal"
     data-target="#imageModal"
     onclick="showImage(this.src)">
        `;
                }

                chatBody.innerHTML += `
        <div class="d-flex align-items-start mb-4">
            <img src="../assets/images/favicons/favicon-16x16.png" class="avatar me-2 m-2">
            <div class="bg-secondary text-white p-2 rounded chat-message" style="background-color : #3b1d00ff !important ;">
                ${message}
                ${imageHTML}
            </div>
        </div>
    `;

                chatBody.scrollTop = chatBody.scrollHeight;

                /* ===== SEND TO BACKEND ===== */
                const formData = new FormData();
                formData.append('message', message);
                formData.append('ticketId', TICKET_ID);
                

                if (selectedImage) {
                    formData.append('image', selectedImage);
                }

                fetch('./BackEnd/SaveReply.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(res => res.text())
                    .then(response => {
                        Toastify({
                            text: response,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(270deg, #f8274e 0%, #2a31a8 100%)",
                            close: true
                        }).showToast();
                    })
                    .catch(err => {
                        Toastify({
                            text: "Error: " + err,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(270deg, #ff1640 0%, #b6022f 100%)",
                            close: true
                        }).showToast();
                    });

                /* ===== RESET ===== */
                messageInput.value = '';
                document.getElementById('imageInput').value = '';
                document.getElementById('imagePreview').innerHTML = '';
                selectedImage = null;
            }
        </script>

        <!-- End custom js for this page-->
</body>



</html>





