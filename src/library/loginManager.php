<<<<<<< HEAD
<!-- <?php

$adminUser = "admin@assemblerschool.com";
$adminPwd = "1234";


if(isset ($_POST["user"]) && isset($_POST ["pwd"])) {
    if ($_POST["user"] == $adminUser && $_POST["pwd"] == $adminPwd) {
    session_start();

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pwd"] = $_POST["pwd"];

    header("Location: ./dashboard.php");

    } else {
    header("Location: ../index.php");
    }
}
?> -->
=======
<?php 
session_start();

session_destroy();
header('Location: ../../index.php');

?>
>>>>>>> develop
