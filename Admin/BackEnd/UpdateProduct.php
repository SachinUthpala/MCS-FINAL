<?php
require '../../DB/config.conn.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid Request";
    exit;
}

$uniqueId = $_POST["uniqueId"] ?? '';
$productName = $_POST["ProductName"] ?? '';
$productDescription = $_POST["ProductDiscription"] ?? '';
$mainCat = $_POST["mainNav"] ?? '';
$subCat = $_POST["subNav"] ?? 'null';

// -------------------------------
// IMAGE UPDATE (Optional)
// -------------------------------
$imageName = null;
$imageUploadPath = '../../Images/ProductImages/';

if (isset($_FILES['ProductImage']) && $_FILES['ProductImage']['error'] === 0) {

    $originalName = $_FILES['ProductImage']['name'];
    $newName = "Product_". $uniqueId . "_" . $originalName;
    $tmp = $_FILES['ProductImage']['tmp_name'];

    if (move_uploaded_file($tmp, $imageUploadPath . $newName)) {
        $imageName = $newName;
    }
}

// -------------------------------
// UPDATE PRODUCT TABLE
// -------------------------------
$sql = "UPDATE products SET 
            ProductName = :pn,
            Discription = :pd,
            MainCategory = :mc,
            SubCategory = :sc"
            . ($imageName ? ", Image = :img" : "") .
        " WHERE uniqueId = :uid";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":pn", $productName);
$stmt->bindParam(":pd", $productDescription);
$stmt->bindParam(":mc", $mainCat);
$stmt->bindParam(":sc", $subCat);
$stmt->bindParam(":uid", $uniqueId);

if ($imageName) {
    $stmt->bindParam(":img", $imageName);
}

$stmt->execute();

// -------------------------------
// UPDATE EXISTING SPECS
// -------------------------------
$specSql = "SELECT specId FROM productspecs WHERE uniqueId = :uid";
$specStmt = $pdo->prepare($specSql);
$specStmt->execute([':uid' => $uniqueId]);

$currentIndex = 1;

while ($row = $specStmt->fetch(PDO::FETCH_ASSOC)) {

    $specId = $row["specId"];

    $headerField = "CurrentSpecH" . $currentIndex;
    $descField   = "CurrentSpecD" . $currentIndex;

    $header = $_POST[$headerField] ?? '';
    $desc = $_POST[$descField] ?? '';

    $updateSpec = "UPDATE productspecs 
                   SET specheader = :h, specDiscription = :d 
                   WHERE specId = :sid";
    $up = $pdo->prepare($updateSpec);
    $up->execute([
        ":h" => $header,
        ":d" => $desc,
        ":sid" => $specId
    ]);

    $currentIndex++;
}

// -------------------------------
// INSERT NEW SPECS
// -------------------------------
$newHeaders = $_POST["specHeader"] ?? [];
$newDescs = $_POST["SpecDiscription"] ?? [];

for ($i = 0; $i < count($newHeaders); $i++) {
    if (trim($newHeaders[$i]) === "") continue;

    $ins = $pdo->prepare("
        INSERT INTO productspecs (uniqueId, specheader, specDiscription)
        VALUES (:u, :h, :d)
    ");
    $ins->execute([
        ":u" => $uniqueId,
        ":h" => $newHeaders[$i],
        ":d" => $newDescs[$i] ?? ''
    ]);
}

// -------------------------------
// DELETE SPECS
// -------------------------------
if (!empty($_POST["deleteSpecId"])) {
    foreach ($_POST["deleteSpecId"] as $deleteId) {
        $del = $pdo->prepare("DELETE FROM productspecs WHERE specId = :sid");
        $del->execute([":sid" => $deleteId]);
    }
}

echo "Product Updated Successfully!";
?>
