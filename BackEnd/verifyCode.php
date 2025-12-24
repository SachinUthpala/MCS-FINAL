<?php
session_start();
require '../DB/config.conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $code = $_POST['code'] ?? '';

    if ($code === '') {
        echo "invalid";
        exit;
    }

    // Example verification (match with session)
    if ($code == $_SESSION['verificationCode']) {
      

        $userMail = $_SESSION['userEmail'];

        $sql = "UPDATE `users` SET `VerificationCode`= :verification WHERE userEmail = :userEmail";
        $smtp = $pdo->prepare($sql);
        $smtp->execute([

            ':verification' => 1,
            ':userEmail' => $userMail

        ]);

        $_SESSION['Verfication'] =1;

        echo "success";

    } else {
        echo "invalid";
    }
}
?>
