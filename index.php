<?php
session_start();

if($_SESSION['user']['info']){
    $isLogged=true;
}
else{
    $isLogged=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Resume</title>
</head>
<body>
    <div class="contain">
        <?php
        include 'pages/menu.php';

        global $page;
        switch($page)
        {
            case "2": include "pages/edit.php"; break;
            case "3": include "pages/login.php"; break;
            case "4": include "pages/register.php"; break;
            default:
            {
                if($isLogged){
                    include "pages/user.php";
                }
                else {
                    include "pages/main.php";
                }
                break;
            }
        }
        
        ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>