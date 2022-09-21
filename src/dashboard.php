<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require './library/employeeManager.php';
$employJson = getEmployee();

include './../assets/cutsections/header.php';
?>

<div class="container">
    <p>
        <a class="btn btn-danger" href="../index.php">Log Out</a>
        <!-- <a class="btn btn-success" href="#">Add User</a> -->
    </p>
<table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>s
            <th>City</th>
            <th>Street Address</th>
            <th>State</th>
            <th>Age</th>
            <th>Postal Code</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
       

        </tbody>
    </table>
</div>
