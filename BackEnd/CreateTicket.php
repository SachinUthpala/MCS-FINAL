<?php
date_default_timezone_set('Asia/Colombo');

session_start();
require '../DB/config.conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Basic session check
    if (!isset($_SESSION['userEmail'])) {
        die("User not logged in.");
    }

    $userMail      = $_SESSION['userEmail'];
    $department    = $_POST['department'] ?? null;
    $ticketTitle   = $_POST['title'] ?? null;
    $ticketDisc    = $_POST['discription'] ?? null;
    $urgancy       = $_POST['urgency'] ?? null;
    $currentDateTime = date('Y-m-d H:i:s');

    // Default attachment value
    $newImageName = null;

    // File upload handling
    if (!empty($_FILES['attachment']['name'])) {

        $imageUploadPath = '../Images/Ticket/';
        $imageName = basename($_FILES['attachment']['name']);

        // Sanitize title for filename
        $safeTitle = preg_replace('/[^a-zA-Z0-9_-]/', '_', $ticketTitle);

        // Create unique filename
        $newImageName = $safeTitle . "_" . time() . "_" . $imageName;

        $tmpFile = $_FILES['attachment']['tmp_name'];
        $destination = $imageUploadPath . $newImageName;

        if (!move_uploaded_file($tmpFile, $destination)) {
            die("File upload failed.");
        }
    }

    // Insert ticket
    $sql = "
        INSERT INTO tickets 
        (userMail, DepartmentId, ticketTitle, ticketDiscription, attachment, createdDate, urgancy)
        VALUES
        (:userMail, :DepartmentId, :ticketTitle, :ticketDiscription, :attachment, :createdDate, :urgancy)
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':userMail'           => $userMail,
        ':DepartmentId'       => $department,
        ':ticketTitle'        => $ticketTitle,
        ':ticketDiscription'  => $ticketDisc,
        ':attachment'         => $newImageName,
        ':createdDate'        => $currentDateTime,
        ':urgancy'            => $urgancy
    ]);

    echo "Ticket submitted successfully.";
}
?>
