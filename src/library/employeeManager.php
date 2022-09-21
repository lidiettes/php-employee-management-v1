<?php

function getUsers(){

return json_decode(file_get_contents('../resources/employees.json'),true);
}

function getUserById($id){
    
    $users = getUsers();
    foreach ($users as $user){
        if ($user['id'] == $id){
            return $user;
        }
    }
    return null;
}
?>