<?php
session_start();
require ('employeeManager.php');

// ------------------------------------------------------------------------------- //

if(isset($_GET["action"]) && $_GET["action"] === "listEmployees"){
    echo getEmployeesData();
<<<<<<< HEAD

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

} else if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $employeeId = $_GET['id'];
    deleteEmployee($employeeId);

} 







=======
    
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
    
>>>>>>> 6ee2369f751ab70998cdeab8ea9f7cd4e1f015c7

?>