<!-- TODO Application entry point. Login view -->
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="assets/js/index.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js" integrity="sha512-blBYtuTn9yEyWYuKLh8Faml5tT/5YPG0ir9XEABu5YCj7VGr2nb21WPFT9pnP4fcC3y0sSxJR1JqFTfTALGuPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/index.js"></script>
</head>
<body class="text-center" >
<main class="form-signin w-100 m-auto formBody">
  <form action="src/library/loginController.php" method="POST" id="formLogin">
    <img class="mb-4" src="assets/img/programmer.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="userName" name="userName" >
      <label for="floatingInput">Email or Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="passUser" name="passUser">
      <label for="floatingPassword">Password</label>
    </div>

    <?php
      if(isset($_GET['error'])){
        $error = $_GET['error'];
        
        if($error == 'nodata'){
          echo '<div class="alert alert-danger" role="alert">
          Por favor, rellena todos los campos!
        </div>';
        } 
        if($error == 'incomplete'){  
          echo '<div class="alert alert-danger" role="alert">
          Error, el email o el username está mal!
        </div>';
      }
      }
    ?>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Log In</button>
    <!-- <p class="mt-5 mb-3 text-muted">© 2017–2022</p> -->

    

  </form>
</main>

</body>

</html>