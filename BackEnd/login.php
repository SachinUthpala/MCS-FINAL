<?php
session_start();
require '../DB/config.conn.php';

$email = $_POST['email'] ?? '';
$password = $_POST['Password'] ?? '';

if ($email == "" || $password == "") {
    echo "Please fill all fields";
    exit;
}

$sql = "SELECT * FROM users WHERE userEmail = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "Email does not exist";
    exit;
}

// Compare passwords (hash or plain)
if (!password_verify($password, $user['userPassword'])) {
    echo "Incorrect password";
    exit;
}

// login success
$_SESSION['userEmail'] = $user['userEmail'];
$_SESSION['AdminType'] = $user['AdminType'];
$_SESSION['userImage'] = $user['userImg'];
 
echo "success";
?>
