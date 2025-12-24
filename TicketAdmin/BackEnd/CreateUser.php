<?php
header('Content-Type: application/json');

//GETTING DB CONNECTION

require '../../DB/config.conn.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit;
}

$username   = trim($_POST['username'] ?? '');
$email      = trim($_POST['email'] ?? '');
$password   = $_POST['password'] ?? '';
$department = $_POST['Department'] ?? '';
$adminType  = $_POST['adminType'] ?? '';

if (!$username || !$email || !$password) {
    echo json_encode([
        'status' => 'error',
        'message' => 'All fields are required'
    ]);
    exit;
}

$sql = "SELECT * FROM ticketusers WHERE userEmail = :userEmail";
$smtp = $pdo->prepare($sql);
$smtp->execute([
    ':userEmail' => $email
]);

if($smtp->rowCount() > 0){
    echo json_encode([
        'status' => 'error',
        'message' => 'Email already exists'
    ]);
    exit;
}

// hashing passw2ors

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql2 = "INSERT INTO `ticketusers`(`userEmail`, `userName`, `password`, `departmentId`, `adminType`)
 VALUES ( :userEmail , :userName , :password , :departmentId , :adminType)";
$smtp2 = $pdo->prepare($sql2);
$smtp2->execute([
   
    ':userEmail' => $email ,
    ':userName' => $username ,
    ':password' => $hashedPassword ,
    ':departmentId' => $department ,
    ':adminType' => $adminType
]);

// SUCCESS
echo json_encode([
    'status' => 'success',
    'message' => 'User created successfully'
]);
