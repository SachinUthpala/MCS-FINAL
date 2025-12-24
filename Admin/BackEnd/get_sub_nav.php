<?php
require '../../DB/config.conn.php'; // your database connection

if (!empty($_POST['nav_code'])) {
    $nav_code = $_POST['nav_code'];

    

    $stmt = $pdo->prepare("SELECT * FROM sub_navigation WHERE nav_code = ?");
    $stmt->execute([$nav_code]);

    $subs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($subs);
}
?>