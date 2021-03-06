<?php
session_start();

if($_SESSION['user']['info']){
    $isLogged=true;
}
else{
    $isLogged=false;
}
$page=$_GET['page'];
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
        if($isLogged || $_GET['page']=='admin' || $_GET['page']=='new' || $_GET['page']=='login' || $_GET['page']=='register'){
            include 'pages/menu.php';
        }else{
            //echo 'see this';
        }

        global $page;
        switch($page)
        {
            case "edit":
                include "pages/edit.php";
                break;
            case "admin":
            case "login":
                include "pages/login.php";
                break;
            case "new":
            case "register":
                include "pages/register.php";
                break;
            default:
                include "pages/main.php";
        }
        
        ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>