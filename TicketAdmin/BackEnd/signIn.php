<?php


//GETTING DB CONNECTION

require '../../DB/config.conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    $userName = $_POST['email'];
    $password = $_POST['password'];

    echo "success";

}