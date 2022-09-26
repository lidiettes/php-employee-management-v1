<?php
session_start();
require ('employeeManager.php');

// ------------------------------------------------------------------------------------------------ //
if(isset($_GET["action"]) && $_GET["action"] === "listEmployees"){
    echo getEmployeesData();
    
    }else if (isset($_GET['action']) && $_GET['action'] === 'createEmploy'){
        $newEmployee = [
            "name"          => $_POST['name'],
            "lastName"      => $_POST['lastName'],
            "email"         => $_POST['email'],
            "gender"        => $_POST['gender'],
            "city"          => $_POST['city'],
            "streetAddress" => $_POST['streetAddress'],
            "state"         => $_POST['state'],
            "age"           => $_POST['age'],
            "postalCode"    => $_POST['postalCode'],
            "phoneNumber"   => $_POST['phoneNumber'],
        ];
        addEmployee($newEmployee);

    } else if  (isset($_GET['action']) && $_GET['action'] === 'deleteEmployee' ){
    $employeeId = $_GET['id'];
    deleteEmployee($employeeId);

}   



  
// VIEW EMPLOYEE DETAILS in the Employee section
if (isset($_GET["v"])) {
  if( $_GET["v"]=="view"){
    $id = $_GET["id"];
    header("Location:../employee.php?v=view&id=$id");
  }
} 

?>


