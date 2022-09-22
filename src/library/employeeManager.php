<?php



// ----------------------------------------------------------------------------- //

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

