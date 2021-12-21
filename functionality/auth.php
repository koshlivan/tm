<?php
session_start();
$dbh = require_once 'db_connection.php';
global $page;


$userLogin = $_POST["inpLog"];
$userPass = md5($_POST["inpPass"]);

$findUser = "SELECT * FROM users WHERE login='$userLogin' AND password='$userPass'";
$result = $dbh->query($findUser);



$userData = $result->fetch();


if (!!$userData && count($userData) > 0) {

    $_SESSION["user"] = [
        "id" => $userData['id'],
        "login" => $userData['login'],
        "email"=>$userData['email']
    ];

//    echo "<pre>".print_r($_SESSION["user"])."</pre>";
//    die();
    $_SESSION["user"]["info"] = $_SESSION["user"]["id"];


    $_GET["page"] = "1";
    header("location: ../index.php?page=1");
} else {
    $_SESSION['message'] = 'Invalid login or password';
    $_GET["$page"] = "login";
    header('Location: ../index.php?page=login');
}



