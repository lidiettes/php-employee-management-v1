<?php
function getUsers(){
    return json_decode(file_get_contents('./../resources/employees.json'),true);
    // echo '<pre>';
    // var_dump($users);
    // echo '</pre>';
    // exit;
}
?>