<?php 
require '../../DB/config.conn.php';

// Enable error reporting for PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userName = $_POST['UserName'];
    $userEmail = $_POST['UserEmail'];
    $userPassword = $_POST['UserPass'];
    $userPhone = $_POST['UserPhone'];
    $AdminType = $_POST['userType'];

    $verificationCode = 1;

    // password hashing
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    // Check if email already exists
    $sqlCheck = "SELECT * FROM users WHERE userEmail = :userEmail";
    $checkSmtp = $pdo->prepare($sqlCheck);
    $checkSmtp->execute([':userEmail' => $userEmail]);  // FIXED VARIABLE

    if ($checkSmtp->rowCount() > 0) {
        echo "Email Already Registered";
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO users (userName, userEmail, userPassword, AdminType, VerificationCode, userPhone) 
            VALUES (:userName, :userEmail, :userPassword, :AdminType, :VerificationCode, :userPhone)";

    $smtp = $pdo->prepare($sql);

    $smtp->execute([
        ':userName' => $userName,
        ':userEmail' => $userEmail,
        ':userPassword' => $hashedPassword,
        ':AdminType' => $AdminType,
        ':VerificationCode' => $verificationCode,
        ':userPhone' => $userPhone
    ]);

    echo 'New User '.$userName.' Created Successfully';
}
?>
