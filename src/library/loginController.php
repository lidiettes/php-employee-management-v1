<?php
require_once('loginManager.php');

// Lo que introduce el user
$userName = $_POST['userName'];
$userPass = $_POST['passUser'];

// Send parametros del user que tendrá que coincider con el users.json
loginAdmin($userName,$userPass);


?>

