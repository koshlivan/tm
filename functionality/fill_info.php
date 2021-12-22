<?php
session_start();
$dbh = require_once 'db_connection.php';

//used if cv creating by everyone
//$userId = $_SESSION['user']['id'];

//only my cv
$userLogin = 'ivan';

//used if cv creating by everyone
//$sql = "SELECT * FROM users WHERE login='$userId'";

//only my cv
$sql = "SELECT * FROM users WHERE login='$userLogin'";

$res = $dbh->query($sql);
$usr = $res->fetch();

return $usr;


