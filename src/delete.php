<?php
require 'library/employeeManager.php';




if (!isset($_POST['id'])){
    echo "Not found";
    exit;
}

$userId = $_POST['id'];
deleteUser($userId);




header("Location:./dashboard.php");
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
        <h3>View User: <b><?php echo $user['name']?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?v=view&id=<?= $user["id"]?>">Update</a>
            <form style ="display:inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user["id"]?>">
            <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
            <a class="btn btn-danger" href="delete.php?v=view&id=<?= $user["id"]?>">Delete</a>
        </div>
<table class="table">
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $user['name']?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $user['email']?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $user['age']?></td>
        </tr>
        <tr>
            <th>Street</th>
            <td><?php echo $user['streetAddress']?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php echo $user['city']?></td>
        </tr>
        <tr>
            <th>State</th>
            <td><?php echo $user['state']?></td>
        </tr>
        <tr>
            <th>Postal Code</th>
            <td><?php echo $user['postalCode']?></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><?php echo $user['phoneNumber']?></td>
        </tr>
      
    </tbody>
</table>
</div>
</div> 
</body>
</html>