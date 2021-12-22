<?php
session_start();
$dbh = require_once 'db_connection.php';
global $page;

if(isset($_POST['RegisterForm'])){
    global $page;
    $userLogin=validField($_POST['inpLog']);
    $userEmail=validField($_POST['inpEmail']);
    $userPassword = $_POST['inpPass'];
    $userRePassword=$_POST['inpRePass'];
    signUp($userLogin, $userEmail, $userPassword, $userRePassword);
}

if(isset($_POST['FormLogin'])){
    $userLogin = validField($_POST["inpLog"]);
    $userPass = md5($_POST["inpPass"]);
    signIn($userLogin, $userPass);
}

//login
function signIn($userLogin, $userPass)
{
    global $dbh;
    global $page;
    $findUser = "SELECT * FROM users WHERE login='$userLogin' AND password='$userPass'";
    $result = $dbh->query($findUser);
    $userData = $result->fetch();
    if (!!$userData && count($userData) > 0) {

        $_SESSION["user"] = [
            "id" => $userData['id'],
            "login" => $userData['login'],
            "email" => $userData['email']
        ];


        $_SESSION["user"]["info"] = $_SESSION["user"]["id"];


        $_GET["page"] = "1";
        header("location: ../index.php?page=1");
    } else {
        $_SESSION['message'] = 'Invalid login or password';
        $_GET["$page"] = "login";
        header('Location: ../index.php?page=login');
    }
}

//register
function signUp($userLogin, $userEmail, $userPassword, $userRePassword)
{
    global $dbh;
    global $page;
    if ($userPassword === $userRePassword) {
        $userPassword = md5($userPassword);
        $sql = "INSERT INTO users (login, password, email) VALUES ('$userLogin', '$userPassword', '$userEmail') ";
        if ($res = $dbh->query($sql)) {
            $_GET["$page"] = "login";
            header('Location: ../index.php?page=login');
        } else {
            $_SESSION['message'] = 'Такой логин уже занят';
            $_GET["$page"] = "register";
            header('Location: ../index.php?page=register');
        }
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        $_GET["$page"] = "register";
        header('Location: ../index.php?page=register');
    }
}

//prevent sql-injections
function validField($input):string{
    $value=trim($input);
    $value=stripslashes($value);
    $value=htmlspecialchars($value);
    return $value;
}

