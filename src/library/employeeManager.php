<?php

function printEmployees(){
    $employees = json_decode(file_get_contents('../../resources/employees.json'), true);        
        echo json_encode($employees);
}



function deleteEmployee(string $id){
        
    
        // foreach ($employees as $i => $employee){
        //     if ($employee['id'] == $id){
        //         array_splice($employees, $i, 1);
            
        //     }
        // }
    
        // file_put_contents('../../resources/employees.json', json_encode($employees));
        // file_put_contents('../../resources/employees.json', json_encode($users, JSON_PRETTY_PRINT));
    }



function addEmployee(array $datox) {
	$employeeArray = json_decode(file_get_contents("../../resources/employees.json"), true);
	$newArray = array();
	$id = array();
    foreach($employeeArray as $employee) {
        // ID vacío para alm,acenar los ids del json
		$id[] = $employee["id"];
	}
    echo $id;
    
    // El valor máximo id + 1(para incrementarlo)
	$newId = max($id) + 1;
	$newArray = array(
		"id" => $datox[$newId],
		"name" => $datox["name"],
		"email" => $datox["email"],
		"age" => $datox["age"],
		"streetAddress" => $datox["streetAddress"],
		"city" => $datox["city"],
		"state" => $datox["state"],
		"postalCode" => $datox["postalCode"],
		"phoneNumber" => $datox["phoneNumber"],
	);

	array_push($employeeArray, $newArray);

	file_put_contents("../../resources/employees.json", json_encode($employeeArray));
// TODO implement it
}


// EXTRAE LOS DATOS DE JSON
function getEmployeesData() {
	return file_get_contents("../../resources/employees.json");
	
}

function updateEmployee(array $updateEmployee)
{
// TODO implement it
function updateUser($data, $id){
     
    $updateEmployee = [];
    $employees = getEmployees();
    foreach ($employees as $i => $employee){
        if ($employee['id'] == $id){
            $employee[$i] = $updateEmployee = array_merge($employee, $data);
        }
    }

    file_put_contents('../resources/employees.json', json_encode($employees, JSON_PRETTY_PRINT));
   
    return $updateEmployee;
}
}


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