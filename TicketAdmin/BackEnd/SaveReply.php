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


$sender = 1;



$ticketId = $_POST['ticketId'];
$ticketTitle = random_int(100 , 5000000);//only for images
$ReplyMassage = $_POST['message'];
$userId = $_POST['userId'];

  // Default attachment value
    $newImageName = 'NotAssign';
    

    if (!empty($_FILES['image']['name'])) {

        $imageUploadPath = '../../Images/Ticket/';
        $imageName = basename($_FILES['image']['name']);

        // Sanitize title for filename
        $safeTitle = preg_replace('/[^a-zA-Z0-9_-]/', '_', $ticketTitle);

        // Create unique filename
        $newImageName = $safeTitle . "_" . time() . "_" . $imageName;

        $tmpFile = $_FILES['image']['tmp_name'];
        $destination = $imageUploadPath . $newImageName;

        if (!move_uploaded_file($tmpFile, $destination)) {
            die("File upload failed.");
        }
    }


    // update ticket assign

/* INSERT REPLY */
$stmt = $pdo->prepare("
    INSERT INTO ticket_replies (ticketId, sender, message, attachment)
    VALUES (?, ?, ?, ?)
");
$stmt->execute([$ticketId, $sender, $ReplyMassage, $newImageName]);


// update ticket assign
$sql2 = "UPDATE tickets SET  AssignTo = ? WHERE ticketId = ?";
$stmt = $pdo->prepare($sql2);
$stmt->execute([$userId, $ticketId]);

echo "Message sent successfully";
