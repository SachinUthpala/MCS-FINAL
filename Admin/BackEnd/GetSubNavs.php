<?php
require '../../DB/config.conn.php';

if(isset($_GET['nav_code'])){
    $navCode = $_GET['nav_code'];

    $stmt = $pdo->prepare("SELECT id, sub_name FROM sub_navigation WHERE nav_code = ?");
    $stmt->execute([$navCode]);

    $subs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($subs);
}
?>
