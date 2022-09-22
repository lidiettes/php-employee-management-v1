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

// UPDATE USER
function updateUser($data, $id){
     
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user){
        if ($user['id'] == $id){
            $users[$i] = $updateUser = array_merge($user, $data);
            

        }
    }

    file_put_contents('../resources/employees.json', json_encode($users, JSON_PRETTY_PRINT));
   
    return $updateUser;
}

// DELETE

function deleteUser(string $id)
{
    $users = getUsers();

    foreach ($users as $i => $user){
        if ($user['id'] == $id){
            array_splice($users, $i, 1);
            // unset($users[$i]);
            // $users = array_values($users);
        }
    }

    putJson($users);
    // file_put_contents('../../resources/employees.json', json_encode($users, JSON_PRETTY_PRINT));
}

function putJson($users)
{
    file_put_contents('../resources/employees.json', json_encode($users, JSON_PRETTY_PRINT));
}
?>