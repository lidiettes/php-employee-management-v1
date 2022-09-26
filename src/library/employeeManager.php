<?php

// EXTRAE LOS DATOS DE JSON
function getEmployeesData() {
	return file_get_contents("../../resources/employees.json");
	
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



// function updateEmployee(array $updateEmployee )
// {
// // TODO implement it
// $employeeData  = json_decode(file_get_contents('../../resources/employees.json'), true);


// 	for($i=0; $i < count($employeData); $i++){
	
// 		if($employeData[$i]['id'] == $updateEmployee['id']){

// 			   $employeData[$i]  = $updateEmployee;
            

// 			// display current employ
// 			// $employeDataObj[$i] = array_merge($employeDataObj, $updateEmployee);
// 		}
			
// 	}
// 			file_put_contents("../../resources/employees.json", json_encode($employeData));
// 			header("Location: ../dashboard.php");
  	
// }

// UPDATE EMPLOYEE
function updateEmployee($employeData, $id){
     
    $updateEmployee = [];
    $employees = getEmployees();
    foreach ($employees as $i => $employee){
        if ($employee['id'] == $id){
            $employees[$i] = $updateEmployee= array_merge($employee, $data);
        }
		
    }

    file_put_contents('../resources/employees.json', json_encode($employees, JSON_PRETTY_PRINT));
   
    return $updateEmployee;
}





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



function getEmployee(string $id){

$employeData  = json_decode(file_get_contents('../resources/employees.json'), true);

	foreach($employeData as $employeDataObj){
		// Si el $employeObj == al parametro Id
		if($employeDataObj['id'] == $id){
			// display current employ
			return $employeDataObj;
		}
	}
	return null;

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