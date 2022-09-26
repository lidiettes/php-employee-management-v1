<!-- TODO Employee view -->
<?php
require 'library/employeeManager.php';

if (!isset($_GET['id'])){
    echo "Not found";
    exit;
}

$employeeId = $_GET['id'];


$employee = getEmployeeById($employeeId);
if (!$employee){
    echo "Not found";
    exit; 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft Contents</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>View User: <b><?php echo $employee['name']?></b></h3>
        </div>
        <!-- <div class="card-body">
            <a class="btn btn-secondary" href="update.php?v=view&id=<?= $user["id"]?>">Update</a>
            <a class="btn btn-danger" href="delete.php?v=view&id=<?= $user["id"]?>">Delete</a>
        </div> -->
<table class="table">
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $employee['name']?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $employee['email']?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $employee['age']?></td>
        </tr>
        <tr>
            <th>Street</th>
            <td><?php echo $employee['streetAddress']?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php echo $employee['city']?></td>
        </tr>
        <tr>
            <th>State</th>
            <td><?php echo $employee['state']?></td>
        </tr>
        <tr>
            <th>Postal Code</th>
            <td><?php echo $employee['postalCode']?></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><?php echo $employee['phoneNumber']?></td>
        </tr>
      
    </tbody>
</table>
</div>
</div> 
</body>
</html>