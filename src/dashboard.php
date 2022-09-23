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
        <h1 class="title">Welcome Lovelance Contents</h1>
        <a href="../index.php" class="btn btn-sm btn btn-warning">Log Out</a>
        <!-- <a href="#" id="createEmploy" class="btn btn-sm btn btn-success">Create</a> -->


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Create Modal Employees
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
             
                <h5 class="modal-title" id="exampleModalLabel">New Employ</h5>
      
            <form  id="formData" action="newEmploy">
              <div class="modal-body">
                        <div class="form-control">
                            <label for="name">Name:</label>
                            <input type="text" name="name">
                        </div>

                        <div class="form-control">
                        <label for="email">Email:</label>
                        <input type="email" name="email">
                        </div>

                        <div class="form-control">
                        <label for="age">Age:</label>
                        <input type="text" name="age">
                        </div>

                        <div class="form-control">
                        <label for="street">Street:</label>
                        <input type="text" name="street">
                        </div>

                        <div class="form-control">
                        <label for="state">State:</label>
                        <input type="text" name="state">
                        </div>

                        <div class="form-control">
                        <label for="postalCode">Postal Code:</label>
                        <input type="text" name="postalCode">
                        </div>

                        <div class="form-control">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="text" name="phoneNumber">
                        </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- ¿¿¿Name=Submit???? -->
                        <button type="submit" class="btn btn-primary" name="submit">Add Employ</button>     
                        </div>

                    </div>   
        </form>
            

            </div>
        </div>
        </div>

        <hr class="border">
            <div class="content">

                <table class="table mt-5">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Postal Code</th>
                        <th>Phone number</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    </thead>
                    <tbody id="tbody"></tbody>

        
            </table>

            </div>
    </div>
</body>
</html>