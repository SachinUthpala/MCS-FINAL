<?php
session_start();

// Destroy all session data
$_SESSION = [];
session_unset();
session_destroy();

// Optionally clear cookies (if you set any)
if (isset($_COOKIE['PHPSESSID'])) {
    setcookie("PHPSESSID", "", time() - 3600, "/");
}

// Redirect to login page (or homepage)
header("Location: ../index.php");
exit;
?>
