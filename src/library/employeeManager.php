<?php


function printEmployees(){
    $employees = json_decode(file_get_contents('../../resources/employees.json'), true);        
        echo json_encode($employees);
}



/* if ($_SERVER['REQUEST_METHOD'] == 'POST') {          
    function get_data() {
        $employees = json_decode(file_get_contents('../../resources/employees.json'), true);
        json_encode($employees);
         $employees[] = array(
            
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
        return json_encode($employees);  
        
    }      
    $name = "../../resources/employees";
    $file_name = $name . '.json';   

    if(file_put_contents(
        "$file_name", get_data())) {63
            echo $file_name .' file created';
        }
    else {
        echo 'There is some error';
    }
 }*/


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


function getEmployees()
{
    
    
}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier($id): int
{
    
}
//array $employeesCollection

function getUserById($id)
{
    $users = getEmployees();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}
