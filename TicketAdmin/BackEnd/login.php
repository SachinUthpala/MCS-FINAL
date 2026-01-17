<?php
header('Content-Type: application/json');

//GETTING DB CONNECTION

require '../../DB/config.conn.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit;
}


$userEmail = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM ticketusers WHERE userEmail = :userEmail";
$smtp = $pdo->prepare($sql);
$smtp->execute([
    ':userEmail' => $userEmail
]);

if($smtp->rowCount() > 0) {


    $result = $smtp->fetch(PDO::FETCH_ASSOC);
    $password2 = $result['password'];


    if (!password_verify($password, $password2)) {
    
        echo json_encode([
        'status' => 'error',
        'message' => 'Invalid User Credintials'
        ]);
        exit;


    }

    $_SESSION['TicketuserEmail'] = $result['userEmail'];
    $_SESSION['TicketuserName'] = $result['userName'];
    $_SESSION['TicketuserDepartment'] = $result['departmentId'];
     $_SESSION['TicketuserAdmin'] = $result['adminType'];
      $_SESSION['USERID'] = $result['adminType'];

    echo json_encode([
        'status' => 'success',
        'message' => 'User Login Sucessfull.'
    ]);

}else{

    
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid User Credintials'
    ]);
    exit;
}



