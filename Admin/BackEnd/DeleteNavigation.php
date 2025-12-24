<?php
require '../../DB/config.conn.php';

if (!empty($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM main_navigation WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    echo "Product Deleted Successfully"; // <-- very important for AJAX
    exit;
}
?>
