<?php
$error;
if(!empty($_POST['emailUser']) && !empty($_POST['passUser'])){
    $email = $_POST['emailUser'];
    $password = $_POST['passUser'];
    if($email == 'lok@lok.com' && $password == '123'){
        $error = 'OK';

        header("Location: ../dashboard.php");
    } else{
        $error = 'incomplete';
        header("Location: ../../index.php?error=$error");
        exit();
    }
} else{

    $error = 'nodata';
    header("Location: ../../index.php?error=$error");
    exit();
}
?>


