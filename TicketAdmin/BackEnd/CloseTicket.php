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


$ticketId = $_POST['TicketId'];
$status = 2;

$sql = "UPDATE tickets SET status = :status WHERE  ticketId = :ticketId ";
$smtp = $pdo->prepare($sql);
$smtp ->execute([
    ':status' => $status,
    ':ticketId' => $ticketId
]);


echo "Ticket Sucessfully Closed";