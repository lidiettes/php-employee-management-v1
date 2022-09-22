<?php

session_start();

require ('employeeManager.php');



if(isset($_GET['action']) && $_GET['action'] === 'list' ){
    printEmployees();
    
    
} else if  (isset($_GET['action']) && $_GET['action'] === 'delete' ){
    $employeeId = $_GET['id'];
    deleteEmployee($employeeId);

}   


?>