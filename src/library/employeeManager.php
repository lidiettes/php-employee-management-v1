<?php

// EXTRAE LOS DATOS DE JSON
function getEmployeesData() {
	return file_get_contents("../../resources/employees.json");
	
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
// TODO implement it
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