<?php
require '../../DB/config.conn.php';

if (!empty($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE userId = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    echo "User Deleted Successfully"; // <-- very important for AJAX
    exit;
}
?>
