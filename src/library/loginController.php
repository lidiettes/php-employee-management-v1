<?php
// $error;
// if(!empty($_POST['emailUser']) && !empty($_POST['passUser'])){
//     $email = $_POST['emailUser'];
//     $password = $_POST['passUser'];
//     if($email == 'lok@lok.com' && $password == '123'){
//         $error = 'OK';

//         header("Location: ../dashboard.php");
//     } else{
//         $error = 'incomplete';
//         header("Location: ../../index.php?error=$error");
//         exit();
//     }
// } else{
//     $error = 'nodata';
//     header("Location: ../../index.php?error=$error");
//     exit();
// }

$usersJson = file_get_contents('../../resources/users.json');
$decodedJson = json_decode($usersJson, true)['users'];

// $emailJson =  $decodedJson[2]->email;
// $passwordJson =  $decodedJson[3]->password;

if ($name = '' || $password = '' ){
echo 'no funchona';
} else {
    foreach ($decodedJson as admin? ){
            if (password_verify($password, $admin['password'])){
 

   


// echo $decodedJson->email;

// echo $decodedJson['email'];
// echo $decodedJson['password'];


// $hash = '$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC';
// if (password_verify('admin@assemblerschool.com', $hash )){
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }

?>


