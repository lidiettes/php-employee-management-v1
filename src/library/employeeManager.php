<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
//  * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function printEmployees(){
    $employees = json_decode(file_get_contents('../../resources/employees.json'), true);        
        echo json_encode($employees);
}


function deleteEmployee(string $id){
    $employees = json_decode(file_get_contents('../../resources/employees.json'), true); 
    for ($i = 0 ; $i < count($employees); $i++ ){
        
        if (($employees[$i]['id']) === $id){
            unset($employees[$i]);
        }
    }


    file_put_contents('../../resources/employees.json', json_encode($employees));

}

function addEmployee(array $newEmployee)
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
