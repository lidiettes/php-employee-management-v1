<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
//  * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

// function getUsers(){
//     return json_decode(file_get_contents('./../resources/employees.json'),true);
//     // echo '<pre>';
//     // var_dump($users);
//     // echo '</pre>';
//     // exit;
// }

function printEmployees(){
    $employees = json_decode(file_get_contents('../../resources/employees.json'), true);        
        echo json_encode($employees);
}


// function getUserById($id){
//     $users = getUsers();
//     foreach ($users as $user){
//         if ($user['id']== $id){
//             return $user;
//         }
//     }
// }
// return null;

//  -------xxx-------

if ($_SERVER['REQUEST_METHOD'] == 'POST') {          
    function get_data() {
        $datae = array();
        $datae[] = array(
            
            'name' => $_POST['name'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'gender' => $_POST['gender'],
            'city' => $_POST['city'],
            'streetAddress' => $_POST['streetAddress'],
            'state' => $_POST['state'],
            'age' => $_POST['age'],
            'postalCode' => $_POST['postalCode'],
            'phoneNumber' => $_POST['phoneNumber'],
        );        
        return json_encode($datae);       

        
    }      
    $name = "../../resources/employees";
    $file_name = $name . '.json';   
    if(file_put_contents(
        "$file_name", get_data(), FILE_APPEND)) {
            echo $file_name .' file created';
        }
    else {
        echo 'There is some error';
    }
}


function addEmployee(array $employees)
{
    /* $employees = json_decode(file_get_contents('../resources/employees.json'), true); */
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
