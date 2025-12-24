<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_page = basename($_SERVER['PHP_SELF']);

$mainID = $_GET['mainID'] ?? null;
$subID  = $_GET['subID'] ?? null;

require './DB/config.conn.php';

/* Fetch main navigation */
$sqlNav = "SELECT * FROM main_navigation";
$navSmtp = $pdo->prepare($sqlNav);
$navSmtp->execute();

$userMail = $_SESSION['userEmail'] ?? null;
$adminType = $_SESSION['AdminType'] ?? 0;
?>


<header class="main-header-two">
    <div class="main-menu-two__top">
        <div class="main-menu-two__top-inner">
            <p class="main-menu-two__top-text">MCS Solutions & SSP Products</p>

            <ul class="list-unstyled main-menu-two__contact-list">
                <li>
                    <div class="icon"><i class="icon-pin"></i></div>
                    <div class="text"><p>No 03, Fife Road, Colombo 05</p></div>
                </li>
                <li>
                    <div class="icon"><i class="icon-search-mail"></i></div>
                    <div class="text">
                        <p><a href="mailto:helpdesk@maryland.lk">helpdesk@maryland.lk</a></p>
                    </div>
                </li>
                <li>
                    <div class="icon"><i class="icon-phone-call"></i></div>
                    <div class="text"><p><a href="tel:0112231502">011 223 1502</a></p></div>
                </li>
            </ul>
        </div>
    </div>

    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">

                <!-- LOGO -->
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="index.php">
                            <img src="assets/images/resources/logo-1.png" height="55">
                        </a>
                    </div>
                </div>

                <!-- MENU -->
                <div class="main-menu-two__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                    <ul class="main-menu__list">

                        <!-- HOME -->
                        <li class="<?php echo ($current_page == 'index.php') ? 'current' : ''; ?>">
                            <a href="index.php">Home</a>
                        </li>

                        <!-- PRODUCTS -->
                        <li class="dropdown <?php echo ($current_page == 'product.php') ? 'current' : ''; ?>">
                            <a href="#">Products</a>

                            <ul class="shadow-box" style="border-radius:5px;">
                                <?php while ($navRow = $navSmtp->fetch(PDO::FETCH_ASSOC)) {

                                    $navCode = $navRow['nav_code'];

                                    $sqlSub = "SELECT * FROM sub_navigation WHERE nav_code = :navCode";
                                    $subSmtp = $pdo->prepare($sqlSub);
                                    $subSmtp->execute([':navCode' => $navCode]);

                                    $hasSub = $subSmtp->rowCount() > 0;

                                    /* MAIN ONLY */
                                    if (!$hasSub) { ?>
                                        <li class="<?php echo ($mainID == $navCode && !$subID) ? 'current' : ''; ?>">
                                            <a href="product.php?main=<?php echo urlencode($navRow['nav_name']); ?>&mainID=<?php echo $navCode; ?>">
                                                <?php echo $navRow['nav_name']; ?>
                                            </a>
                                        </li>

                                    <?php } else { ?>
                                        <!-- MAIN + SUB -->
                                        <li class="dropdown <?php echo ($mainID == $navCode) ? 'current' : ''; ?>">
                                            <a href="javascript:void(0);">
                                                <?php echo $navRow['nav_name']; ?>
                                            </a>

                                            <ul class="shadow-box" style="border-radius:5px;">
                                                <?php while ($subRow = $subSmtp->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <li class="<?php echo ($subID == $subRow['id']) ? 'current' : ''; ?>">
                                                        <a href="product.php?main=<?php echo urlencode($navRow['nav_name']); ?>&mainID=<?php echo $navCode; ?>&sub=<?php echo urlencode($subRow['sub_name']); ?>&subID=<?php echo $subRow['id']; ?>">
                                                            <?php echo $subRow['sub_name']; ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </li>

                        <!-- ABOUT -->
                        <li class="<?php echo ($current_page == 'about.php') ? 'current' : ''; ?>">
                            <a href="about.php">About</a>
                        </li>

                        <!-- SERVICES -->
                        <li class="<?php echo ($current_page == 'services.php') ? 'current' : ''; ?>">
                            <a href="services.php">Services</a>
                        </li>

                        <!-- DRIVERS -->
                        <li class="<?php echo ($current_page == 'drivers.php') ? 'current' : ''; ?>">
                            <a href="drivers.php">Drivers</a>
                        </li>

                        <!-- CONTACT -->
                        <li class="<?php echo ($current_page == 'contact.php') ? 'current' : ''; ?>">
                            <a href="contact.php">Contact</a>
                        </li>

                        <!-- ADMIN -->
                        <?php if ($adminType == 1) { ?>
                            <li class="<?php echo ($current_page == 'index.php') ? 'current' : ''; ?>">
                                <a href="./Admin/index.php">Admin</a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>

                <!-- RIGHT -->
                <div class="main-menu-two__right">
                    <div class="main-menu-two__btn-box">
                        <a href="<?php echo empty($userMail) ? 'login.php?ticketLogin=1' : 'ticket.php'; ?>" class="thm-btn">
                            Open Ticket
                        </a>
                    </div>

                    <?php if (empty($userMail)) { ?>
                        <div class="main-menu-two__btn-box">
                            <a href="login.php" class="thm-btn">Login</a>
                        </div>
                    <?php } else { ?>
                        <div class="main-menu-two__btn-box" style="padding:0;">
                            <a href="#" id="openProfileModal" class="thm-btn" style="padding:0;">
                                <img src="<?php echo $_SESSION['userImage']; ?>" width="60" height="60">
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </nav>
</header>


<div class="modal fade" id="profileModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px;background: #000000d8;">

            <div class="modal-body text-center">

                <img src="<?php echo $_SESSION['userImage']; ?>" width="90" class="mb-3">
                <h4 class="text-white">Welcome <?php echo $_SESSION['userEmail']; ?></h4>

                <!-- 3 buttons in a row -->
                <div class="d-flex justify-content-between gap-2 mt-4">

                    <a href="./404.php" 
                       class="btn btn-primary flex-fill">
                       Profile
                    </a>

                    <a href="./404.php" 
                       class="btn btn-secondary flex-fill">
                       Settings
                    </a>

                    <a href="./BackEnd/logOut.php" 
                       class="btn btn-danger flex-fill">
                       Logout
                    </a>

                </div>

                <!-- Close button full width -->
                <button class="btn btn-light w-100 mt-4" data-bs-dismiss="modal">
                    Close
                </button>

            </div>

        </div>
    </div>
</div>




<script>
document.getElementById("openProfileModal").addEventListener("click", function (e) {
    e.preventDefault();
    let modal = new bootstrap.Modal(document.getElementById("profileModal"));
    modal.show();
});
</script>