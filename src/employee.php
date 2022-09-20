<!-- TODO Employee view -->
<?php
require './library/employeeManager.php';

$userId = $_GET['id'];
$user = getUserById($userId);

// echo '<pre>' ;
// var_dump($user);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft Contents</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- <script src="assets/js/index.js" defer></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js" integrity="sha512-blBYtuTn9yEyWYuKLh8Faml5tT/5YPG0ir9XEABu5YCj7VGr2nb21WPFT9pnP4fcC3y0sSxJR1JqFTfTALGuPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/index.js"></script>

</head>
<body>
<div class="container" >
<div class= "card" >
    <div class= "card-header" >
        <h3>View User </h3>
    </div>
        <table class= "table">
            <tbody>
                <tr>
                    <th> Name : </th>
                    <td> <?php echo $user['name']?> </td>
                </tr>

                <tr>
                    <th> Email : </th>
                    <td> <?php echo $user['email']?> </td>
                </tr>

                <tr>
                    <th> Age : </th>
                    <td> <?php echo $user['age']?> </td>
                </tr>

                <tr>
                    <th> Street : </th>
                    <td> <?php echo $user['streetAddress']?> </td>
                </tr>

                <tr>
                    <th> City : </th>
                    <td> <?php echo $user['city']?> </td>
                </tr>

                <tr>
                    <th> State : </th>
                    <td> <?php echo $user['state']?> </td>
                </tr>

                <tr>
                    <th> postal Code : </th>
                    <td> <?php echo $user['postalCode']?> </td>
                </tr>

                <tr>
                    <th> Phone : </th>
                    <td> <?php echo $user['phoneNumber']?> </td>
                </tr>

            </tbody>

        </table>
</div>
</div>
</body>
</html>