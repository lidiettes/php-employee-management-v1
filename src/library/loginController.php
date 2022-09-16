<?php
session_start();
$user= "user";
$password = "password";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header ("Location: ../src/dashboard.php");
    echo "Esta bien";
}
if (isset ($_POST['user']) && isset($_POST['password'])){
    if ($_POST['user'] == $user && $_POST['password'] == $password)
    {
        $_SESSION['logged_in'] = true;
        header("Location: ../src/dashboard.php");
    }

}
?>







<!-- <?php
session_start();

$adminUser = "admin@assemblerschool.com";
$adminPwd = "1234";


if(isset ($_POST["user"]) && isset($_POST ["password"])) {
    if ($_POST["user"] == $adminUser && $_POST["password"] == $adminPwd) {
    

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: ./dashboard.php");

    } else {
    header("Location: ./index.php");
    }
}
?> -->