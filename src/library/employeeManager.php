<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
//  * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

// function printEmployees(){
//     $employees = json_decode(file_get_contents('../../resources/employees.json'), true);        
//     echo json_encode($employees);

// EXTRAE LOS DATOS DE JSON
function getEmployeesData() {
	return file_get_contents("../../resources/employees.json");
}

<<<<<<< HEAD

function deleteEmployee(string $id){
        $employees = json_decode(file_get_contents('../../resources/employees.json'), true);
        for ($i = 0; $i < count($employees); $i++){
            if ($employees[$i]['id'] == $id){
            array_splice($employees, $i , 1);
            }
        }
        file_put_contents('../../resources/employees.json', json_encode($employees));
        echo json_encode($employees);
}

=======
>>>>>>> 6ee2369f751ab70998cdeab8ea9f7cd4e1f015c7
function addEmployee(array $newEmployee) {
	$employeeArray = json_decode(file_get_contents("../../resources/employees.json"), true);
	$newArray = array();
	$id = array();
	
    foreach($employeeArray as $employee) {
        // ID vacío para almacenar los ids del json
		$id[] = $employee["id"];
	}
    echo $id;
    
    // El valor máximo id + 1(para incrementarlo)
	$newId = max($id) + 1;
	$newArray = array(
		"id" => $newId,
		"name" => $newEmployee["name"],
		"email" => $newEmployee["email"],
		"age" => $newEmployee["age"],
		"streetAddress" => $newEmployee["streetAddress"],
		"city" => $newEmployee["city"],
		"state" => $newEmployee["state"],
		"postalCode" => $newEmployee["postalCode"],
		"phoneNumber" => $newEmployee["phoneNumber"],
	);

	array_push($employeeArray, $newArray);

	file_put_contents("../../resources/employees.json", json_encode($employeeArray));

}

// function updateEmployee(array $updateEmployee){

// // function updateUser($data, $id){

<<<<<<< HEAD
// //     $updateEmployee = [];
// //     $employees = getEmployees();
// //     foreach ($employees as $i => $employee){
// //         if ($employee['id'] == $id){
// //             $employee[$i] = $updateEmployee = array_merge($employee, $data);
// //         }
// //     }
=======
function deleteEmployee(string $id){
        $employees = json_decode(file_get_contents('../../resources/employees.json'), true);
        for ($i = 0; $i < count($employees); $i++){
            if ($employees[$i]['id'] == $id){
            array_splice($employees, $i , 1);
            }
        }
        file_put_contents('../../resources/employees.json', json_encode($employees));
        echo json_encode($employees);
}


>>>>>>> 6ee2369f751ab70998cdeab8ea9f7cd4e1f015c7

// //     file_put_contents('../resources/employees.json', json_encode($employees, JSON_PRETTY_PRINT));
// //     return $updateEmployee;
// // }
// // }


function getEmployee(string $id)
{
// TODO implement it
}


function removeAvatar($id)
{
// TODO implement it
}


// function getQueryStringParameters(): array
{
// TODO implement it
}

// function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}