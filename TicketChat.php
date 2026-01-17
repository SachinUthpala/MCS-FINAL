<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(1);

session_start();

require 'vendor/autoload.php';
require './GoogleConfig.php';
require './DB/config.conn.php';

$ticketId = $_GET['ticketId'];


if (!isset($_SESSION['userEmail']) || !isset($_GET['ticketId'])) {
    header("Location: index.php");
    exit();
}

$sql  = "SELECT * FROM tickets WHERE ticketId = :ticketId";
$smtp = $pdo->prepare($sql);
$smtp->execute([
    ':ticketId' => $ticketId
]);

$resqlt = $smtp->fetch(PDO::FETCH_ASSOC);


//fetch ticket reply (new mwhod)

$stmt = $pdo->prepare("
    SELECT sender, message, attachment, created_at
    FROM ticket_replies
    WHERE ticketId = ?
    ORDER BY created_at ASC
");
$stmt->execute([$ticketId]);
$replies = $stmt->fetchAll(PDO::FETCH_ASSOC);




///cheaking the chat is closed or not




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MCS TICKETS || MCS Software Engineering  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    
    <meta name="description" content="MCS Solutions ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    <!-- CSS -->
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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/module-css/shop.css">
    <link rel="stylesheet" href="./assets/css/module-css/page-header.css">
    <link rel="stylesheet" href="./assets/css/module-css/ChatSpec.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<!-- <div class="loader js-preloader">
    <div></div>
    <div></div>
    <div></div>
</div> -->


<?php if($resqlt['status'] == 2){ ?>

<script>
Swal.fire({
    title: "Are you sure?",
    text: "This ticket is already closed. If you want you can reopen it!",
    icon: "warning",
    background: "#000000e7",
    color: "#ffffff",

    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",

    confirmButtonText: "Yes, Stay & Reopen",
    cancelButtonText: "No, Back To Home"
}).then((result) => {

    // ✅ CONFIRM BUTTON
    if (result.isConfirmed) {
        // call reopen function here if needed
        console.log("Reopen ticket");
    }

    // ✅ CANCEL BUTTON
    if (result.dismiss === Swal.DismissReason.cancel) {
        location.href = './ticket.php';
    }
});
</script>


    <?php } ?>

<div class="page-wrapper">
    <?php require './Components/header.php'; ?>

    <div class="stricky-header stricked-menu main-menu main-menu-two">
        <div class="sticky-header__content"></div>
    </div>

    <section class="page-header" style="height: 300px !important;">
        <div class="page-header__bg" style="background-image: url(./assets/images/chatBg.jpg);"></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Preview Of Ticket Chat </h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                        <li><span class="icon-right-arrow-1"></span></li>
                        <li><a href="ticket.php"><i class="fas fa-ticket"></i>Tickets</a></li>
                        <li><span class="icon-right-arrow-1"></span></li>
                        <li>Chat Id : <?php echo 'MCSTI-'.$resqlt['ticketId'].'23@34'; ?> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class=" ticket-options mt-5"  style="display: flex;flex-direction: row; gap: 30px ;align-items: center;text-align: center;justify-content: center;">

                    <div class="main-menu-two__btn-box" style="border-radius: 0%; margin-left: 5px;">
                        <a type="button"  class="thm-btn" onclick="closeTicket()" style="padding: 20px 90px !important;background: #ff1a1aff !important;">Close The Ticket</a>
                    </div>

                    <div class="main-menu-two__btn-box"  style="border-radius: 0%; margin-left: 5px;">
                        <a type="button"  class="thm-btn" style="padding: 20px 90px !important;" onclick="location.href='./ticket.php'" >Back To Dashboard</a>
                    </div>
        
    </div>

    <div class="container mt-3  p-4 rounded" style="margin-bottom: 30px !important; background:transparent;border:none !important;">
        <div class="card" style="background-color: transparent;border:none !important;">
            <div class="card-header text-center fw-bold" style="color: #fff; background-color: transparent;border:none !important;">
                <?php echo $resqlt['ticketTitle']; ?>
            </div>
            <hr>
            <br>
            <div class="card-body chat-body" id="chatBody">

                <!-- Original Ticket Message -->
                <div class="d-flex align-items-start justify-content-end mb-4">
                    <div class="bg-primary text-white p-2 rounded text-end chat-message">
                        <?php echo $resqlt['ticketDiscription']; ?>
                        <?php if($resqlt['attachment'] != 'NotAssign') { ?>
                            <br>
                            <img src="<?php echo './Images/Ticket/'.$resqlt['attachment']; ?>"
                                 class="chat-img"
                                 data-bs-toggle="modal"
                                 data-bs-target="#imageModal"
                                 onclick="showImage(this.src)">
                        <?php } ?>
                    </div>
                    <img src="<?php echo $_SESSION['userImage']; ?>" class="avatar ms-2">
                </div>


                <!-- new ticket loop -->
<?php foreach ($replies as $reply): ?>

    <?php if ($reply['sender'] == 1): /* MCS */ ?>

        <div class="d-flex align-items-start mb-4">
                            <img src="assets/images/favicons/favicon-16x16.png" class="avatar me-2">
                            <div class="bg-secondary text-white p-2 rounded chat-message">
                                <?php echo $reply['message']; ?>
                                <br>
                                <?php if($reply['attachment'] != 'NotAssign') { ?>
                                <img src="<?php echo './Images/Ticket/'.$reply['attachment']; ?>"
                                     class="chat-img"
                                     data-bs-toggle="modal"
                                     data-bs-target="#imageModal"
                                     onclick="showImage(this.src)">
                                     <?php } ?>
                            </div>
                        </div>

                        <?php else: /* USER */ ?>


                            <div class="d-flex align-items-start justify-content-end mb-4">
                                <div class="bg-primary text-white p-2 rounded text-end chat-message">
                                    <?php echo $reply['message']; ?>
                                    <?php if($reply['attachment'] != 'NotAssign') { ?>
                                        <br>
                                        <img src="<?php echo './Images/Ticket/'.$reply['attachment']; ?>"
                                             class="chat-img"
                                             data-bs-toggle="modal"
                                             data-bs-target="#imageModal"
                                             onclick="showImage(this.src)">
                                    <?php } ?>
                                </div>
                                <img src="<?php echo $_SESSION['userImage']; ?>" class="avatar ms-2">
                            </div>

                            <?php endif; ?>

    <?php endforeach; ?>

                <!-- new ticket loop end -->



                <!-- Loop for all replies -->
               

            </div>

            <!-- Input -->
            <div class="card-footer chat-input">
                <br>
                <div class="input-group">
                    <input type="file" id="imageInput" class="form-control d-none" accept="image/*" >
                    <button class="btn btn-outline-secondary" onclick="document.getElementById('imageInput').click()">
                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                    </button>
                    <input type="text" id="messageInput" class="form-control" placeholder="Type a message...">
                    <div class="main-menu-two__btn-box" style="border-radius: 0%; margin-left: 5px;">
                        <a type="button" onclick="sendMessage()" class="thm-btn">Send</a>
                    </div>
                </div>
                <div id="imagePreview" class="mt-2"></div>
            </div>

        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img id="modalImage" src="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer and Scripts -->
    <?php require './Components/Footer.php'; ?>
</div>

<?php require './Components/MobileNav.php'; ?>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/js/ChatSpec.js" ></script> -->
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<script>

</script>

<script>
const TICKET_ID = <?= (int)$ticketId ?>;

let selectedImage = null;

/* ====== SHOW IMAGE IN MODAL ====== */
function showImage(src) {
    document.getElementById('modalImage').src = src;
}

/* ====== IMAGE PREVIEW ====== */
document.getElementById('imageInput').addEventListener('change', function () {
    const file = this.files[0];
    if (!file) return;

    if (!file.type.startsWith('image/')) {
        alert('Please select an image file');
        this.value = '';
        return;
    }

    selectedImage = file;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('imagePreview').innerHTML =
            `<img src="${e.target.result}" class="chat-img">`;
    };
    reader.readAsDataURL(file);
});

/* ====== SEND MESSAGE FUNCTION ====== */
function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const chatBody = document.getElementById('chatBody');
    const message = messageInput.value.trim();

    if (message === '' && !selectedImage) return;

    /* ===== UI APPEND ===== */
    let imageHTML = '';
    if (selectedImage) {
        const imgURL = URL.createObjectURL(selectedImage);
        imageHTML = `
            <br>
            <img src="${imgURL}"
                 class="chat-img"
                 data-bs-toggle="modal"
                 data-bs-target="#imageModal"
                 onclick="showImage(this.src)">
        `;
    }

    chatBody.innerHTML += `
        <div class="d-flex align-items-start justify-content-end mb-4">
            <div class="bg-primary text-white p-2 rounded text-end chat-message">
                ${message}
                ${imageHTML}
            </div>
            <img src="<?php echo $_SESSION['userImage']; ?>" class="avatar ms-2">
        </div>
    `;

    chatBody.scrollTop = chatBody.scrollHeight;

    /* ===== BACKEND SEND ===== */
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



function closeTicket() {
    const CloseFormData = new FormData();
    CloseFormData.append('ticketId', TICKET_ID);


    fetch('./BackEnd/CloseTicket.php', {
        method: 'POST',
        body: CloseFormData
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

        setTimeout(() => {
            location.reload();
        }, 3000);
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
}
</script>



</body>
</html>
