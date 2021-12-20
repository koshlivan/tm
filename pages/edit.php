<?php
$userInfo=require_once 'functionality/fillinfo.php';
?>
<div>
        <form class="wraper" action="functionality/edit.php" method="POST" enctype="multipart/form-data">
            <div class="side-info">
                <div class="for-photo">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    <input type="file" id="ld_photo" placeholder="File input here" name="inpPhoto">
                </div>
                <h3 class="lblCont">Contact</h3>
                <input type="text" class="inp-edit" placeholder="Phone" name="inpPhone" value="<?=$userInfo['phone']?>">
                <input type="email" class="inp-edit" placeholder="E-Mail" name="inpMail" value="<?php if($_SESSION['user']['email']!=''){echo $_SESSION['user']['email'];}?>">
                <input type="text" class="inp-edit" placeholder="Address" name="inpAddr" value="<?=$userInfo['adr']?>">
                <input type="text" class="inp-edit" placeholder="LinkedIn" name="inpLd" value="<?=$userInfo['ld']?>">
                <h3 class="lblCont">Education</h3>
                <input  class="inp-edit"
                           placeholder="Degree name"
                           name="inpDegree"
                           value="<?=$userInfo['degr']?>"
                >
                <input  class="inp-edit"
                        placeholder="University name"
                        name="inpUniversity"
                        value="<?=$userInfo['unvs']?>"
                >
                <input  class="inp-edit"
                        placeholder="Period"
                        name="inpPeriod"
                        value="<?=$userInfo['period']?>"
                >
                <h3 class="lblCont">Skills</h3>
                <input type="text"
                       class="inp-edit"
                       placeholder="php, html, css, javascript"
                       name="inpSkill"

                >
            </div>

            <div class="main-info">
                <div class="head">
                <input type="text"
                       class="inp-edit-name"
                       placeholder="Your name"
                       name="inpName"
                       value="<?=$userInfo['name']?>"
                >
                    <h2>web developer</h2>
                </div>
                <div class="remain-info">  
                    <h3>Profile</h3>
                    <textarea  class="inp-edit-main"
                               placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta placeat quis iure modi nobis, repellat illum blanditiis, laboriosam, debitis ipsam eveniet saepe. Exercitationem, libero repellendus perferendis eveniet assumenda"
                               cols="20"
                               name="inpProfile"
                    ><?=$userInfo['prof']?></textarea>

                    <h3>Professional experiance</h3>
                    <textarea  class="inp-edit-main"
                               placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta placeat quis iure modi nobis, repellat illum blanditiis, laboriosam, debitis ipsam eveniet saepe. Exercitationem, libero repellendus perferendis eveniet assumenda"
                               cols="20"
                               name="inpExper"
                    ><?=$userInfo['exp']?></textarea>
                    <input type="submit" value="Save">
                </div> 
            </div>
        </form>
        </div>
    