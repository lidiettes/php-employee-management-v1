<?php
// session_start();
require ('./library/employeeController.php');

// if(!isset($_SESSION['user'])){
//     echo "Hola OK";
//     header('Location: ../index.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Employee Management </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/index.js" defer></script>
    <style>
        body{
            height: 100vh;
        }
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
    
        h1,h2,h3,h4,h5,h6{
            text-align: center;
            font-weight: bold;
        }
    
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title text-center">Dashboard LoveLance</h1>
        <!-- Exit to Login-Page -->
        <form action="library/loginController.php?action=logOut" method="GET">
            <input name="logOut" class="btn btn-sm btn btn-danger p-1" value="Log Out" type="submit">
        </form>
        
        <hr class="border">

        <div class="content">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">New Employee</button>

            <!-- Modal Add New Employee-->
            <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 id="text-center" class="modal-title" id="exampleModalLabel">Add Employee</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Add Employee Form -->
                    <form method="POST" id="formInputs" class="mt-5">    
                        <div class="modal-body">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Name</span>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Last Name</span>
                                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter your last name" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Email</span>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                <select class="form-select" id="gender" name="gender" id="inputGroupSelect01" value="gender">
                                    <option selected disabled>What gender do you identify with?</option>
                                    <option value="Man">Man</option>
                                    <option value="Woman">Woman</option>
                                    <option value="Another">Another</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">City</span>
                                <input type="text" id="city" name="city" class="form-control" placeholder="What city are you from?" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Street Address</span>
                                <input type="text" id="streetAddress " name="streetAddress" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">State</span>
                                <input type="text" name="state" class="form-control" placeholder="Enter your state" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Age</span>
                                <input type="text" name="age"  class="form-control" placeholder="How old are you?" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Postal Code</span>
                                <input type="text" name="postalCode" class="form-control" placeholder="Enter your postal code" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Phone Number</span>
                                <input type="text" name="phoneNumber" class="form-control" placeholder="Enter your phone number" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger p-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary p-2">Save employee</button>
                        </div>
                    </form>    
                    </div>
                </div>
            </div>

            <!-- Table list of Employees -->
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Street Address</th>
                        <th>State</th>
                        <th>Age</th>
                        <th>Postal Code</th>
                        <th>Phone Number</th>    
                        <!-- Action BUTTONS -->
                        <th>Update/Edit</th>    
                        <th>Delete</th>    
                    </tr>
                </thead>
            <tbody id="tbody">
                <!-- Dynamic Insert TR from JS-->
            </tbody>
            </table>

        </div>
    </div>
</body>
</html>