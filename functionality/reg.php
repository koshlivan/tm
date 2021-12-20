<?php
session_start();
$dbh = require_once 'db_connection.php';


global $loginId;
global $page;
$userLogin=$_POST['inpLog'];
$userEmail=$_POST['inpEmail'];

if($_POST['inpPass']===$_POST['inpRePass']){
    $userPassword=md5($_POST['inpPass']);
    $sql = "INSERT INTO users (login, password, email) VALUES ('$userLogin', '$userPassword', '$userEmail') ";
    $res=$dbh->query($sql);
    //$loginId=$dbh->lastInsertId();

    $_SESSION["user"]["email"]=$userEmail;

    $_GET["$page"]="3";
    header('Location: ../index.php?page=3');
}
else{
    $_SESSION['message']='Пароли не совпадают';
    $_GET["$page"]="4";
    header('Location: ../index.php?page=4');
}
