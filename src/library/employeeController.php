<?php
session_start();
require ('employeeManager.php');

// ------------------------------------------------------------------------------------------------ //
if(isset($_GET["action"]) && $_GET["action"] === "listEmployees"){
    echo getEmployeesData();
    };
    

// ------------------------------------------------------------------------------------------------ //
// if(isset($_GET["action"]) && $_GET["action"] === "addEmployee"){    
//     echo addEmployee($newEmployee);
//     };

    if(isset($_GET["action"]) && $_GET["action"] === "newEmploy"){
        $datox = $_GET(["action"] === "newEmploy");
        return addEmployee($datox);
        
     
    }



?>