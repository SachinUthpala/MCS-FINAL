<?php 
require '../../DB/config.conn.php';

// Enable error reporting for PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id  = $_POST['userId'];
    $userName = $_POST['UserName'];
    $userEmail = $_POST['UserEmail'];
    $userPhone = $_POST['UserPhone'];
    $AdminType = $_POST['userType'];




    $sql = "UPDATE `users` SET `userName`= :userName ,`userEmail`= :userEmail ,`AdminType`= :AdminType , `userPhone` = :userPhone 
    WHERE userId = :userId";
    $smtp = $pdo->prepare($sql);

    $smtp->execute(
        [
            ':userName' => $userName,
            ':userEmail' => $userEmail,
            ':AdminType' => $AdminType,
            ':userPhone' => $userPhone,
            ':userId' => $id
        ]
        );


        echo 'User Updated Successfull';






}