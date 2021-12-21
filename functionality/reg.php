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
    if($res=$dbh->query($sql)){
        $_GET["$page"]="login";
        header('Location: ../index.php?page=login');
    }
    else{
        $_SESSION['message']='Такой логин уже занят';
        $_GET["$page"]="register";
        header('Location: ../index.php?page=register');
    }
}
else{
    $_SESSION['message']='Пароли не совпадают';
    $_GET["$page"]="register";
    header('Location: ../index.php?page=register');
}
