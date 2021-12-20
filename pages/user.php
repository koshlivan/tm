<?php
session_start();
global $page;
$userInfo=require_once 'functionality/fillinfo.php';
?>
<div class="wraper">

    <div class="side-info">
        <img class="pr-photo" src="<?=$userInfo['photo']?>" alt="Profile photo">
        <h3 class="lblCont">Contact</h3>
        <p class="p-info"><?=$userInfo['phone']?><br>
            <?=$userInfo['email']?><br>
            <?=$userInfo['adr']?><br>
            <?=$userInfo['ld']?>
        </p>
        <h3 class="lblCont">Education</h3>
        <p class="p-info"><?=$userInfo['vacanc']?><br>
            <?=$userInfo['unvs']?><br>
            <?=$userInfo['period']?>
        </p>
        <h3 class="lblCont">Skills</h3>
        <p class="p-info"><?=$userInfo['skill']?></p>
        <!--<ul class="ul-info">
            <?php
//            foreach($skills as $skill){
//                echo "<li>$skill</li>";
//            }
            ?>
        </ul>-->
    </div>

    <div class="main-info">
        <div class="head">
            <h1><?=$userInfo['name']?></h1>
            <h2><?=$userInfo['vacanc']?></h2>
        </div>
        <div class="remain-info">
            <h3>Profile</h3>
            <p><?=$userInfo['prof']?></p>
            <h3>Professional experience</h3>
            <p><?=$userInfo['exp']?></p>
        </div>
    </div>

</div>



