<?php
<<<<<<< HEAD
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
=======
$error;
if(!empty($_POST['emailUser']) && !empty($_POST['passUser'])){
    $email = $_POST['emailUser'];
    $password = $_POST['passUser'];
    if($email == 'lok@lok.com' && $password == '123'){
        $error = 'OK';
        // echo 'Welcome, todo correcto';
        header("Location: ../dashboard.php");
    } else{
        // echo 'Lo siento, revisa el emial o contraseña';
        // $error = 'Lo siento, revisa el emial o contraseña';
        $error = 'incomplete';
        header("Location: ../../index.php?error=$error");
        exit();
    }
} else{
    // echo 'Por favor, rellena todos los campos';
    // $error = 'Por favor, rellena todos los campos';
    $error = 'nodata';
    header("Location: ../../index.php?error=$error");
     exit();
}
?>

>>>>>>> develop
