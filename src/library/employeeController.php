<?php
function getUsers(){

$users = json_decode(file_get_contents('./../resources/employees.json'),true);


var_dump($users);
echo '<pre>';
exit;

}
?>