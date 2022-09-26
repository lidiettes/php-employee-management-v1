<!-- TODO Employee view -->
<?php
require 'library/employeeManager.php';
// require 'library/employeeController.php';
// Recibo el ID desde index.js
$employId = $_GET['id'];
// Envia ese ID para comparalos
$newEmployeObj = getEmployee($employId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employ Page</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <!-- Ojo, con las funciones que vinen de index.js -->
    <script src="../assets/js/index.js" defer></script>
    <style>
        .modal-content h5{
            text-align: center;
            font-size: 30px;
            margin-top: 20px;
        }
        .modal-body{
            padding: 0 40px 40px 40px;
        }
        .form-control{
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 10px;
        }
        label{
            /* margin-right: 2%; */
            flex: 1;
            font-weight: bold;
        }
        input{
            flex: 3;
        }
    </style>

    <script src="../assets/js/index.js" defer></script>

</head>
   <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>View User: <b><?php echo $newEmployeObj['name'] ?></b></h3>
            </div>
            
                <table class="table">
                <tbody>
                    <tr>
                        <th>ID:</th>
                    <td><?php echo $newEmployeObj['id'] ?></td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td><?php echo $newEmployeObj['name'] ?></td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td><?php echo $newEmployeObj['lastName'] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $newEmployeObj['email'] ?></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?php echo $newEmployeObj['gender'] ?></td>
                </tr>
                <tr>
                    <th>City:</th>
                    <td><?php echo $newEmployeObj['city'] ?></td>
                </tr>
                <tr>
                    <th>Street Address:</th>
                    <td><?php echo $newEmployeObj['streetAddress'] ?></td>
                </tr>
                <tr>
                    <th>State:</th>
                    <td><?php echo $newEmployeObj['state'] ?></td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td><?php echo $newEmployeObj['age'] ?></td>
                </tr>
                <tr>
                    <th>Postal Code:</th>
                    <td><?php echo $newEmployeObj['postalCode'] ?></td>
                </tr>
                <tr>
                    <th>Phone Number:</th> 
                    <td><?php echo $newEmployeObj['phoneNumber'] ?></td>
                </tr>
                </tbody>
            </table>
        </div>
   </div>
</html>