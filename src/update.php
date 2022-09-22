<?php
require 'library/employeeManager.php';

if (!isset($_GET['id'])){
    echo "Not found";
    exit;
}

$userId = $_GET['id'];

$users = getUsers();


$user = getUserById($userId);
if (!$user){
    echo "Not found";
    exit; 
}

if($_SERVER["REQUEST_METHOD"] === 'POST'){
   $user = updateUser($_POST, $userId);
  header("Location:./dashboard.php");
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
        <h3>Update User: <b><?php echo $user['name']?></b> </h3>
        </div>
            <div class="card-body">
            <form method="POST" enctype="multipart/form" action="">
        <div class="form-group">
            <label>Name</label>
            <input name="name" value="<?php echo $user['name']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="name" value="<?php echo $user['email']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input name="name" value="<?php echo $user['age']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Street</label>
            <input name="name" value="<?php echo $user['streetAddress']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>City</label>
            <input name="name" value="<?php echo $user['city']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>State</label>
            <input name="name" value="<?php echo $user['state']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Postal Code</label>
            <input name="name" value="<?php echo $user['postalCode']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input name="name" value="<?php echo $user['phoneNumber']?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input name="picture" type="file" class="form-control-file">
        </div>
       </br>
        <button class="btn btn-success">Submit</button>
    </form>
            
        </div>
    </div>
    </div>
</body>
</html>