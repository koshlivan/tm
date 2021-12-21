<?php
require_once 'functionality/fill_info.php';
$photopath=$usr['photo'];
?>
<div>
        <form class="wraper" action="functionality/edit.php" method="POST" enctype="multipart/form-data">
            <div class="side-info">
                <div class="for-photo">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    <input type="file" id="ld_photo" placeholder="File input here" name="inpPhoto" value="<?=$photopath?>">
                </div>
                <h3 class="lblCont">Contact</h3>
                <input type="text" class="inp-edit" placeholder="Phone" name="inpPhone" value="<?=$usr['phone']?>">
                <input type="email" class="inp-edit" placeholder="E-Mail" name="inpMail" value="<?=$usr['email']?>">
                <input type="text" class="inp-edit" placeholder="Address" name="inpAddr" value="<?=$usr['address']?>">
                <input type="text" class="inp-edit" placeholder="LinkedIn" name="inpLd" value="<?=$usr['linked']?>">
                <h3 class="lblCont">Education</h3>
                <input  class="inp-edit"
                           placeholder="Degree name"
                           name="inpDegree"
                           value="<?=$usr['degree']?>"
                >
                <input  class="inp-edit"
                        placeholder="University name"
                        name="inpUniversity"
                        value="<?=$usr['university']?>"
                >
                <input  class="inp-edit"
                        placeholder="Period"
                        name="inpPeriod"
                        value="<?=$usr['period']?>"
                >
                <h3 class="lblCont">Skills</h3>
                <input type="text"
                       class="inp-edit"
                       placeholder="php, html, css, javascript"
                       name="inpSkill"
                       value="<?=$usr['skill']?>"
                >
            </div>

            <div class="mmain-info">
                <div class="heading">
                <input type="text"
                       class="inp-edit-name"
                       placeholder="Your name"
                       name="inpName"
                       value="<?=$usr['name']?>"
                >
                    <h2>web developer</h2>
                </div>
                <div class="remain-info">  
                    <h3>Profile</h3>
                    <textarea  class="inp-edit-main"
                               placeholder="Personal information"
                               cols="20"
                               name="inpProfile"
                    ><?=$usr['profile']?></textarea>

                    <h3>Professional experiance</h3>
                    <textarea  class="inp-edit-main"
                               placeholder="Professional experience"
                               cols="20"
                               name="inpExper"
                    ><?=$usr['experiance']?></textarea>
                    <input type="submit" value="Save">
                </div> 
            </div>
        </form>
        </div>
    