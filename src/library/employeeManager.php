<?php

	// DATA FROM JSON
	function getEmployeesData() {
		return file_get_contents("../../resources/employees.json");
		
	}

	// New Employee
	function addEmployee(array $newEmployee) {
		$employeeArray = json_decode(file_get_contents("../../resources/employees.json"), true);
		$newArray = array();
		$id = array();
		
		foreach($employeeArray as $employee) {
			$id[] = $employee["id"];
		}
		echo $id;

		$newId = max($id) + 1;
		$newArray = array(
			"id" => $newId,
			"name" => $newEmployee["name"],
			"lastName" => $newEmployee["lastName"],
			"email" => $newEmployee["email"],
			"gender" => $newEmployee["gender"],
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


	// Udpate current User
	function updateEmployee(array $updateEmployee )
	{
	$employeData  = json_decode(file_get_contents('../../resources/employees.json'), true);

		for($i=0; $i < count($employeData); $i++){
			if($employeData[$i]['id'] == $updateEmployee['id']){
				$employeData[$i]  = $updateEmployee;
			}		
		}
				file_put_contents("../../resources/employees.json", json_encode($employeData));
				header("Location: ../dashboard.php");	
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

	}


	// function getQueryStringParameters(): array
	{
	// TODO implement it
	}

	// function getNextIdentifier(array $employeesCollection): int
	{
	// TODO implement it
	}