<?php

header('Content-Type: application/json');

//GETTING DB CONNECTION

require '../DB/config.conn.php';
session_start();



if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit;
}

$ticketId = $_POST['ticketId'];
// close ticket status
$status = 2;

$sql = "UPDATE tickets SET status = :status WHERE ticketId = :ticketId";
$smtp = $pdo->prepare($sql);
$smtp->execute([

    ':status' => $status,
    ':ticketId' => $ticketId


]);

echo "Ticket Closed successfully";




?>