<?php
require '../../DB/config.conn.php';

// Return plain text (Toastify shows this)
header('Content-Type: text/plain; charset=utf-8');

try {
    // Basic validation
    if (!isset($_POST['UniqueId']) || trim($_POST['UniqueId']) === '') {
        throw new Exception('Missing navigation UniqueId.');
    }

    $navCode = trim($_POST['UniqueId']);
    $mainNav = isset($_POST['MainNav']) ? trim($_POST['MainNav']) : '';

    // Arrays from form inputs (these arrive as arrays when inputs have name="...[]")
    $subExisting = isset($_POST['SubNavExisting']) && is_array($_POST['SubNavExisting']) ? $_POST['SubNavExisting'] : [];
    $subNavs = isset($_POST['SubNav']) && is_array($_POST['SubNav']) ? $_POST['SubNav'] : [];

    // Clean arrays: trim & remove empty entries
    $clean = function($arr) {
        return array_values(array_filter(array_map('trim', (array)$arr), function($v) {
            return $v !== '' && $v !== null;
        }));
    };

    $subExisting = $clean($subExisting);
    $subNavs = $clean($subNavs);

    // Start transaction
    $pdo->beginTransaction();

    // Optional: check nav exists
    $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM main_navigation WHERE nav_code = ?");
    $checkStmt->execute([$navCode]);
    $exists = $checkStmt->fetchColumn();
    if (!$exists) {
        throw new Exception('Navigation code not found.');
    }

    // Remove existing sub navigations for this nav code
    $stmtDel = $pdo->prepare("DELETE FROM sub_navigation WHERE nav_code = ?");
    $stmtDel->execute([$navCode]);

    // Update main navigation name
    $stmt = $pdo->prepare("UPDATE main_navigation SET nav_name = ? WHERE nav_code = ?");
    $stmt->execute([$mainNav, $navCode]);

    // Insert new sub navigations (first the newly added ones)
    $insertStmt = $pdo->prepare("INSERT INTO sub_navigation (nav_code, sub_name) VALUES (?, ?)");

    foreach ($subNavs as $sub) {
        $sub = trim($sub);
        if ($sub === '') continue;
        $insertStmt->execute([$navCode, $sub]);
    }

    // Re-insert existing sub navigations (these were the originally-existing ones the user left)
    foreach ($subExisting as $subE) {
        $subE = trim($subE);
        if ($subE === '') continue;
        $insertStmt->execute([$navCode, $subE]);
    }

    $pdo->commit();

    echo "Navigation updated successfully.";

} catch (Exception $e) {
    if ($pdo && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    // For debugging you can echo $e->getMessage(); in production prefer a generic message
    echo "Error: " . $e->getMessage();
}
