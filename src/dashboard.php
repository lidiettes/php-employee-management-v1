<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php

require ('./library/employeeController.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft Contents</title>
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js" integrity="sha512-blBYtuTn9yEyWYuKLh8Faml5tT/5YPG0ir9XEABu5YCj7VGr2nb21WPFT9pnP4fcC3y0sSxJR1JqFTfTALGuPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="../assets/js/index.js" defer></script>

</head>
<body>
    <div class="container">
        <h1 class="title">Dashboard LoveLance Squad</h1>
        <a href="../index.php" class="btn btn-sm btn btn-danger p-1"><i class="bi bi-box-arrow-left p-1"></i>Log Out</a>

        <hr class="border">
        <div class="content">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-plus"></i> New Employee</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New employee data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <form method="POST" id="formInputs">    
                        <div class="modal-body">
                            <!-- <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">ID</span>
                                <input type="text" id="id" name="id" class="form-control" aria-label="id" aria-describedby="addon-wrapping">
                            </div>
                            <br> -->
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
                                <select class="form-select" id="gender" name="gender" id="inputGroupSelect01">
                                    <option selected>What gender do you identify with?</option>
                                    <option value="man">Man</option>
                                    <option value="woman">Woman</option>
                                    <option value="another">Another</option>
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
                            <button type="button" class="btn btn-danger p-2" data-bs-dismiss="modal"><i class="bi bi-x-circle p-1"></i>Close</button>
                            <button type="submit" name="submit" class="btn btn-primary p-2"><i class="bi bi-box-arrow-down p-1"></i>Save employee</button>
                        </div>
                    </form>    
                    </div>
                </div>
            </div>

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
                        <th>Update/Edit</th>    
                        <th>Delete</th>    
                    </tr>
                </thead>
            <tbody id="tbody"></tbody>
            </table>

        </div>
    </div>
</body>
</html>