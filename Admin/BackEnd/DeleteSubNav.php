<?php

require '../../DB/config.conn.php';


$sub_id = $_POST["sub_id"];

if (!isset($_POST["sub_id"])) {
    exit("Error: sub_id not provided.");
}

$sql = "DELETE FROM `sub_navigation` WHERE id = :id";
$smtp = $pdo->prepare($sql);
$smtp->execute([
 ':id' => $sub_id
]);

echo 'SubNavigation Deleted ! ID : '.$sub_id;



?>