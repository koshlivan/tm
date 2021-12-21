<?php
session_start();
$dbh = require_once 'db_connection.php';
$userId = $_SESSION['user']['id'];

$sql = "SELECT * FROM users WHERE id='$userId'";
$res = $dbh->query($sql);
$usr = $res->fetch();

return $usr;


