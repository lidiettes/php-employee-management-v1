<!-- TODO Employee view -->
<?php
require 'library/employeeManager.php';

// Recibo el ID desde index.js
if(isset($_GET['id'])){

$employId = $_GET['id'];
// Envia ese ID para comparalos
$newEmployeObj = getEmployee($employId);


}

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

<body>
 
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
   </body>
</html>

<div class="container">
<div class="card">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User: <b><?php echo $newEmployeObj['name'] ?></b></h5> 
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body mt-4">
               <form method="POST" action="library/employeeController.php?id=<?php echo $newEmployeObj['id'] ?>" id="modal_update_inputs" enctype="multipart/form-data">    
                        <div class="modal-body">
                            <!-- <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">ID</span>
                                <input type="text" id="id" name="id" class="form-control" aria-label="id" aria-describedby="addon-wrapping">
                            </div>
                            <br> -->
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Name</span>
                                <input type="text" id="name" name="name" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['name'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Last Name</span>
                                <input type="text" id="lastName" name="lastName" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['lastName'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Email</span>
                                <input type="text" id="email" name="email" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['email'] ?>">
                            </div>
                            <br>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                <select class="form-select" id="gender" name="gender" id="inputGroupSelect01" value="<?php echo $newEmployeObj['gender'] ?>">
                                    <option disabled selected>What gender do you identify with?</option>
                                    <option value="Man">Man</option>
                                    <option value="Woman">Woman</option>
                                    <option value="Another">Another</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">City</span>
                                <input type="text" id="city" name="city" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['gender'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Street Address</span>
                                <input type="text" id="streetAddress " name="streetAddress" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['streetAddress'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">State</span>
                                <input type="text" name="state" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['state'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Age</span>
                                <input type="text" name="age"  class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['age'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Postal Code</span>
                                <input type="text" name="postalCode" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['postalCode'] ?>">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Phone Number</span>
                                <input type="text" name="phoneNumber" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $newEmployeObj['phoneNumber'] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger p-2" data-bs-dismiss="modal"><i class="bi bi-x-circle p-1"></i>Close</button>
                            <button type="submit" name="submit" class="btn btn-primary p-2"><i class="bi bi-box-arrow-down p-1"></i>Save employee</button>
                        </div>
                    </form>    

            </div>
           
        </div>
        </div>
        </div>
</div>
</div>