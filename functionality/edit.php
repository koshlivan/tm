<?php
session_start();
$dbh = require_once 'db_connection.php';

$userName=$_POST["inpName"];
$userPhone=$_POST["inpPhone"];
$userEmail=$_POST["inpMail"];
$userAddres=$_POST["inpAddr"];
$userLinked=$_POST["inpLd"];
$userDegree=$_POST["inpDegree"];
$userUniversity=$_POST["inpUniversity"];
$userPeriod=$_POST["inpPeriod"];
$userProfile=$_POST["inpProfile"];
$userExperiance=$_POST["inpExper"];
$userSkill=$_POST["inpSkill"];


$path='usr_photo/'.time().$_FILES["inpPhoto"]["name"];
move_uploaded_file($_FILES['inpPhoto']['tmp_name'], "../".$path);
//if(move_uploaded_file($_FILES['inpPhoto']['tmp_name'], "../".$path)){echo "uploaded";}
//else{echo "<h1> &#128405;</h1>";}
//die();

$id=$_SESSION["user"]["id"];


    $sql = "UPDATE users 
    SET photo='$path', 
        name='$userName', 
        phone='$userPhone', 
        email='$userEmail', 
        address='$userAddres', 
        linked='$userLinked', 
        degree='$userDegree', 
        university='$userUniversity', 
        period='$userPeriod', 
        profile='$userProfile', 
        experiance='$userExperiance', 
        skill='$userSkill'
    WHERE id='$id'
        ";
    $dbh->query($sql);
    header("Location: ../index.php?page=1");





