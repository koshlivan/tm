<?php
#section home database
//$host="localhost";
//$port=3306;
//$dbname="curiculum";
//$admin="root";
//$passw="";
#endsection

#section work database
$host="localhost";
$port=3306;
$dbname="cv";
$admin="admin";
$passw="admin";


$dbh = new PDO('mysql:host=localhost;dbname=cv', $admin, $passw);

return $dbh;