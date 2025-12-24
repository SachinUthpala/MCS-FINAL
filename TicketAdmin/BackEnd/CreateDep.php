<?php
header('Content-Type: application/json');

//GETTING DB CONNECTION

require '../../DB/config.conn.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit;
}

$departmentName   = trim($_POST['DepartmentName'] ?? '');


if (!$departmentName ) {
    echo json_encode([
        'status' => 'error',
        'message' => 'All fields are required'
    ]);
    exit;
}

$sql = "SELECT * FROM departments WHERE depName = :depName";
$smtp = $pdo->prepare($sql);
$smtp->execute([
    ':depName' => $departmentName
]);

if($smtp->rowCount() > 0){
    echo json_encode([
        'status' => 'error',
        'message' => 'Department already exists'
    ]);
    exit;
}


$sql2 = "INSERT INTO `departments`( `depName`) VALUES ( :depName )";
$smtp2 = $pdo->prepare($sql2);
$smtp2 -> execute([
    ':depName' => $departmentName
]);



// SUCCESS
echo json_encode([
    'status' => 'success',
    'message' => 'Department created successfully'
]);
