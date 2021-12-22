<?php
session_start();
if($_SESSION['user']==null){
    header("Location: ../index.php?page=1");
}
$dbh = require_once 'db_connection.php';



$userName=validField($_POST["inpName"]);
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

if($_FILES["inpPhoto"]["size"]>0){
    $profilePhoto="photo='$path',";
}
else{
    $profilePhoto="";
}


    $sql = "UPDATE users 
    SET ". $profilePhoto
        ."name='$userName', 
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
    WHERE login='ivan'
        ";
    $dbh->query($sql);
    header("Location: ../index.php?page=1");

function validField($input):string{
    $value=trim($input);
    $value=stripslashes($input);
    $value=htmlspecialchars($input);
    return $value;
}



