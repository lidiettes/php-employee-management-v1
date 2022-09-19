<?php
// session_start();
$error;
$filePath = "../../resources/users.json";
$jsonData = file_get_contents($filePath);
$usersJson = json_decode($jsonData, true);

// $email = $usersJson["users"][0]['email'];
// $password = $usersJson["users"][0]['password'];

// foreach($usersJson['users'] as $user){
// $output = $user['email'];
// $output = $user['password'];
// }
// echo $output = $user['email'];
// echo $output = $user['password'];


if($_POST['emailUser'] === "" || $_POST['passUser'] === ""){
    $error = 'nodata';
    header("Location: ../../index.php?error=$error");
    exit();
    
}else{
    foreach($usersJson['users'] as $user){
        if($_POST['emailUser'] === $user['email'] && $_POST['passUser'] === $user['password']){
         $error = 'OK'; 
        header("Location: ../dashboard.php");
    } else{
        $error = 'incomplete';
        header("Location: ../../index.php?error=$error");
        exit();
    }
    }
}

?>

