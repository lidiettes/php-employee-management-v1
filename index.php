<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

$url = "resources/users.json";
$result = json_decode(file_get_contents($url));
// var_dump ($result);

echo"<br><br>";

  foreach ($result->users as $user) {
    echo "users:" . $user ->email . "<br>";
    echo "password:" . $user -> password . "<br>";
  }
?>
</body>
</html>