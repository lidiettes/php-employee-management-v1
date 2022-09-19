<?php
require('loginManager.php');
userISSET();

session_destroy();
header('Location: ../../index.php');
?>