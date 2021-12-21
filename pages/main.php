
    <?php
        $userInfo= require_once 'functionality/fill_info.php';
        if($userInfo['photo']==''){
            $usrPhot=null;
        }
        else{
            $usrPhot=null;
        }

               $photo = $usrPhot ?? "profile.png";
               $phoneNumber = $userInfo['phone'] ?? "+38(555)55-55-55";
               $email = $userInfo['email'] ??"myemail@mail.com";
               $adres = $userInfo['address'] ?? "Country, City";
               $education = $userInfo['degree'] ?? "Software developer";
               $educFacil = $userInfo['university'] ??"Academy";
               $educPeriod = $userInfo['period'] ??"2000-2022";
               $skills = $userInfo['skill'] ?? array("php", "html", "css", "js");
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
                <p class="p-info"><?=$phoneNumber?><br>
                <?=$email?><br>
                <?=$adres?><br>
                <?=$linked?>
                </p>
                <h3 class="lblCont">Education</h3>
                <p class="p-info"><?=$education?><br>
                <?=$educFacil?><br>
                <?=$educPeriod?>
                </p>
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



    