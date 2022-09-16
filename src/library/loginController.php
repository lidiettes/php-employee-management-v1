<?php
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

