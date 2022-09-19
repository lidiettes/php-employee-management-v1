

<?php 
session_start();

accessAdmin($username, $password);
require_once('loginManager.php');
    
$username = $_POST['username'];
$password = $_POST['password'];

// session_destroy();
// header('Location: ../../index.php');

?>

