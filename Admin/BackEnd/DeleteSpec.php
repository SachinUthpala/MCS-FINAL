<?php
require '../../DB/config.conn.php';

if (!empty($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM productspecs WHERE specId  = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    echo "Spec Deleted Successfully"; // <-- very important for AJAX
    exit;
}
?>
