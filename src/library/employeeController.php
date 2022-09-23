<?php
session_start();

require ('employeeManager.php');

// getUsers();




if(isset($_GET["action"])&& $_GET["action"]=="list"){
    echo printEmployees();
    };
    
       if(isset($_POST["action"]) && $_POST["action"]=="addEmployee"){
    
        $employees = file_get_contents('../resources/employees.json');
    
        echo $employees;
        };

 




?>