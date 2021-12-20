<?php
session_start();
$dbh = require_once 'db_connection.php';
global $page;


$userLogin = $_POST["inpLog"];
$userPass = md5($_POST["inpPass"]);

//var_dump(1111111111);
//var_dump($userLogin);
//var_dump($userPass);

$findUser = "SELECT * FROM users WHERE login='$userLogin' AND password='$userPass'";
$result = $dbh->query($findUser);

//var_dump($result->fetch());

//$_SESSION['message']= $result->fetch();

$userData = $result->fetch();
//
//echo "<pre>";
//print_r($userData);
//echo "</pre>";

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
    $_GET["$page"] = "3";
    header('Location: ../index.php?page=3');
}



