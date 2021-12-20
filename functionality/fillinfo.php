<?php
session_start();
$dbh = require_once 'db_connection.php';
$userId=$_SESSION['user']['id'];

$sql="SELECT * FROM users WHERE id='$userId'";
$res=$dbh->query($sql);
$usr=$res->fetch();
//echo "<pre>".print_r($usr)."</pre>";
$userAddress=$usr['address'];
$userLinked=$usr['linked'];
$userEmail=$usr['email'];
$userUniversity=$usr['university'];
$userName=$usr['name'];
$userProfile=$usr['profile'];
$userExperiance=$usr['experiance'];
$userDegree=$usr['degree'];
$userPeriod=$usr['period'];
$userPhone=$usr['phone'];
$userVacancy="Web Developer";
$userPhoto=$usr['photo'];
$userSkill=$usr['skill'];


$usrInfo=["adr"=>$userAddress, "ld"=>$userLinked, "unvs"=>$userUniversity, "name"=>$userName, "email"=>$userEmail, "photo"=>$userPhoto, "skill"=>$userSkill,
    "prof"=>$userProfile, "exp"=>$userExperiance, "degr"=>$userDegree, "period"=>$userPeriod, "phone"=>$userPhone, "vacanc"=>$userVacancy];
//echo "<pre>".print_r($usrInfo)."</pre>";

return $usrInfo;


