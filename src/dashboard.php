<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require './library/employeeController.php';
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
    <link rel="stylesheet" href="../assets/css/main.css">

</head>
<body>
    <div class="container">
        <h1 class="title">Welcome Lovelance Contents</h1>
        <a href="../index.php">Log Out</a>
        <hr class="border">
        <div class="content">



        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>street</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Phone number</th>
            </tr>
            </thead>
            
        
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td> <?php echo $user['name']?> </td>
                        <td> <?php echo $user['email']?> </td>
                        <td> <?php echo $user['age']?> </td>
                        <td> <?php echo $user['streetAddress']?> </td>
                        <td> <?php echo $user['city']?> </td>
                        <td> <?php echo $user['state']?> </td>
                        <td> <?php echo $user['postalCode']?> </td>
                        <td> <?php echo $user['phoneNumber']?> </td>
                    </tr>
                <?php endforeach;; ?>
            </tbody>
        </table>

        </div>
    </div>
</body>
</html>
