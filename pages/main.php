
    <?php
        $userInfo= require_once 'functionality/fill_info.php';

            //everyone's cv
            //if($userInfo['photo']==''){
            //$usrPhot=null;
            //}
            //else{
            //$usrPhot=$userInfo['photo'];
            //}
                //everyone's cv
                //$photo = $userInfo['photo'] ?? "profile.png";

                //my cv
               $photo = $userInfo['photo'] ?? "profile.png";
               $phoneNumber = $userInfo['phone'] ?? "+38(555)55-55-55";
               $email = $userInfo['email'] ??"myemail@mail.com";
               $adres = $userInfo['address'] ?? "Country, City";
               $education = explode(',', $userInfo['degree']) ?? "Software developer";
               $educFacil = explode(',',$userInfo['university']) ??"Academy";
               $educPeriod = explode(',',$userInfo['period']) ??"2000-2022";
               $skills = explode(",", $userInfo['skill']) ?? array("php", "html", "css", "js");
               $fio = $userInfo['name']??"Name Surname";
               $linked = $userInfo['linked']??"LinkedIn";
               $vacancy = "web developer";
               $profileText = $userInfo['profile']??"Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tempora modi animi minima officiis sunt similique itaque quidem ab ut omnis porro nobis reiciendis eum maxime dolore sequi, sed vero.";
               $experiance = $userInfo['experiance']??"Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tempora modi animi minima officiis sunt similique itaque quidem ab ut omnis porro nobis reiciendis eum maxime dolore sequi, sed vero.";

        ?>


        <div class="wraper">

            <div class="side-info">
                <img class="pr-photo" src="<?=$photo?>" alt="Profile">
                <h3 class="lblCont">Contact</h3>
                <div>
                    <p class="p-info"><?=$phoneNumber?><br>
                    <?=$email?><br>
                    <?=$adres?><br>
                    <?=$linked?>
                    </p>
                </div>
                <h3 class="lblCont">Education</h3>
                <div>
                <?php
                if(is_array($education)){
                    for($i=0; $i<count($education);$i++)
                echo '<p class="p-info">'.$education[$i].'<br>'.
                $educFacil[$i].'<br>'.
                $educPeriod[$i].
                '</p>';
                }
                else{
                   echo '<p class="p-info">'.$education.'<br>'.
                       $educFacil.'<br>'.
                       $educPeriod.
                       '</p>';
                }
                ?>
                </div>
                <h3 class="lblCont">Skills</h3>
                <?php
                if(is_array($skills)){
                    echo "<ul class='ul-info'>";
                    foreach($skills as $skill){
                       echo "<li>$skill</li>";
                    }
                echo "</ul>";
                }
                    else{
                        echo "<p class='p-info'>".$skills."</p>";
                    }
                    ?>

            </div>

            <div class="mmain-info">
                <div class="heading">
                    <h1><?=$fio?></h1>
                    <h2><?=$vacancy?></h2>
                </div>
                <div class="remain-info">  
                    <h3>Profile</h3>
                    <p><?=$profileText?></p>
                    <h3>Professional experience</h3>
                    <p><?=$experiance?></p>
                </div> 
            </div>

        </div>



    