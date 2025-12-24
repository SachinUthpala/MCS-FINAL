<?php


require '../../DB/config.conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['ProductName'] ?? '';
    $productDiscription = $_POST['ProductDiscription'] ?? '' ;
    $mainCategory = $_POST['mainNav'] ?? '';
    $subCategory = $_POST['subNav'] ?? 'null' ;

    // productSpecificCode
    $secretCode = random_int(100000, 999999);
    $usebaleSecret = 'Product_'.$secretCode;

    // folder where you want to upload
    $imageUploadPath = '../../Images/ProductImages/';

    // original uploaded file name

    if (!isset($_FILES['ProductImage']) || $_FILES['ProductImage']['error'] === 4) {
    echo "Please Add Image to Continue";
    exit; // stop further execution
}

    $imageName = $_FILES['ProductImage']['name'];

    $newImageName = $usebaleSecret . "_" . $imageName;

    // temp uploaded file
    $tmpFile = $_FILES['ProductImage']['tmp_name'];

    // full destination path
    $destination = $imageUploadPath . $newImageName;

    // move file
    if (move_uploaded_file($tmpFile, $destination)) {

    $sql = "INSERT INTO `products`
            (`uniqueId`, `ProductName`, `Discription`, `Image`, `MainCategory`, `SubCategory`)
            VALUES 
            (:uniqueId, :ProductName, :Discription, :Image, :MainCategory, :SubCategory)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":uniqueId", $secretCode);
    $stmt->bindParam(":ProductName", $productName);
    $stmt->bindParam(":Discription", $productDiscription);
    $stmt->bindParam(":Image", $newImageName);
    $stmt->bindParam(":MainCategory", $mainCategory);
    $stmt->bindParam(":SubCategory", $subCategory);

    if ($stmt->execute()) {
       

        $specHeader = $_POST["specHeader"] ?? [];
        $specDescription = $_POST["SpecDiscription"] ?? [];




        if (!empty($specHeader)) {

            // LOOP THROUGH BOTH ARRAYS
            for ($i = 0; $i < count($specHeader); $i++) {

                $header = trim($specHeader[$i]);
                $desc   = trim($specDescription[$i] ?? '');

                if ($header === '') continue; // skip empty rows
                
                $sqlSpec = "INSERT INTO `productspecs`( `uniqueId`, `specheader`, `specDiscription`) 
                VALUES ( :uniqueId , :specheader , :specDiscription  )";

                $smtpspec = $pdo->prepare($sqlSpec);
                $smtpspec->execute([
                    ':uniqueId' => $secretCode,
                    ':specheader' => $header,
                    ':specDiscription' => $desc
                ]);

              

            }

            echo 'product Added !';
        }



    } else {
        echo "Database insert failed.";
    }

} else {
    echo "Image upload failed.";
}





}else {
    echo 'Invalid Request';
}