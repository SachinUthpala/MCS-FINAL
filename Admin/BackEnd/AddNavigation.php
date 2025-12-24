<?php

require '../../DB/config.conn.php';

$mainNav = $_POST["mainNav"];
$subNavs = json_decode($_POST["subNavs"], true);

// Generate unique code
$navCode = "NAV" . rand(10000, 99999);

// Insert main navigation
$stmt = $pdo->prepare("INSERT INTO main_navigation (nav_code, nav_name) VALUES (?, ?)");
$stmt->execute([$navCode, $mainNav]);

// Insert sub navigations
if (!empty($subNavs) || $subNavs != '' || $subNavs != ' ') {

    $stmt2 = $pdo->prepare("INSERT INTO sub_navigation (nav_code, sub_name) VALUES (?, ?)");

    foreach ($subNavs as $sub) {
        $stmt2->execute([$navCode, $sub]);
    }
}

echo "Navigation Saved Successfully! Code: $navCode";

?>
