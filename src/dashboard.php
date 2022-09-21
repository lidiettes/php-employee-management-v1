<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require 'library/employeeController.php';

$users = getUsers();

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
 <table class="table table-success table-striped w-75">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Street</th>
        <th>City</th>
        <th>State</th>
        <th>Postal Code</th>
        <th>Phone Number</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['email']?></td>
            <td><?php echo $user['age']?></td>
            <td><?php echo $user['streetAddress']?></td>
            <td><?php echo $user['city']?></td>
            <td><?php echo $user['state']?></td>
            <td><?php echo $user['postalCode']?></td>
            <td><?php echo $user['phoneNumber']?></td>
            <td>
                <a href="employee.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info">View</a>
                <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-secondary">Update</a>
                <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach;; ?>
    </tbody>
 </table>
     
    <div class="container">
        <h1 class="title">Welcome Lovelance Contents</h1>
        <a href="../index.php">Log Out</a>
        <hr class="border">
        <div class="content">
            <article>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure vel aut, adipisci delectus a obcaecati aspernatur saepe vitae velit debitis amet reiciendis aperiam nemo, culpa voluptas earum sequi laudantium esse?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure vel aut, adipisci delectus a obcaecati aspernatur saepe vitae velit debitis amet reiciendis aperiam nemo, culpa voluptas earum sequi laudantium esse?</p>
            </article>
        </div>
    </div>


</body>
</html>