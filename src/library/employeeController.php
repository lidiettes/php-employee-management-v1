<?php
require 'employeeManager.php';

$users = getUsers();


  
  // VIEW EMPLOYEE DETAILS in the Employee section
  if (isset($_GET["v"])) {
    if( $_GET["v"]=="view"){
      $id = $_GET["id"];
      header("Location:../employee.php?v=view&id=$id");
    }
  }
  
?>