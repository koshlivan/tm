<?php
session_start();
global $page;
$page="";
?>
<nav class="menu">
            <a href="index.php?page=1">Main Page</a>
    <?php if(isset($_SESSION["user"]["id"])){ echo
            '<a  href="index.php?page=edit">Edit</a>';}
    else{
        echo '<a href="index.php?page=login">Login</a>';
        echo '<a href="index.php?page=register">Register</a>';
    }
    ?>

    <?php if(isset($_SESSION["user"])){echo
            '<a href="functionality/logout.php">Logout</a>';}
    ?>
</nav>

<?php
if(isset($_GET["page"])){
    $page=$_GET["page"];
}
?>