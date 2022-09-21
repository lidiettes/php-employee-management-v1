<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php 

require 'library/employeeController.php';

$employees = getEmployees();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Postal code</th>
                        <th>Phone number</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach ($employees as $employee) : ?>
                    <tr>
                        <td><?php echo $employee['name']; ?></td>
                        <td><?php echo $employee['email']; ?></td>
                        <td><?php echo $employee['age']; ?></td>
                        <td><?php echo $employee['streetAddress']; ?></td>
                        <td><?php echo $employee['city']; ?></td>
                        <td><?php echo $employee['state']; ?></td>
                        <td><?php echo $employee['postalCode']; ?></td>
                        <td><?php echo $employee['phoneNumber']; ?></td>
                    </tr> 
                <?php endforeach;; ?>    
                </tbody>

            </table>
        </div>
    </div>
</body>
</html>