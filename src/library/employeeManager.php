<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function getUsers(){
    return json_decode(file_get_contents('./../resources/employees.json'),true);
    // echo '<pre>';
    // var_dump($users);
    // echo '</pre>';
    // exit;
}

function getUserById($id){
    $users = getUsers();
    foreach ($users as $user){
        if ($user['id']== $id){
            return $user;
        }
    }

}
return null;

// ! -------xxx-------


function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id)
{
// TODO implement it
}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}
