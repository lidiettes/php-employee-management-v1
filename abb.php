 <?php foreach($employeesJSON as $employeObj): ?>
                <tr>
                    <td><?php echo $employeObj['id'] ?></td>s
                    <td><?php echo $employeObj['name'] ?></td>
                    <td><?php echo $employeObj['lastName'] ?></td>
                    <td><?php echo $employeObj['email'] ?></td>
                    <td><?php echo $employeObj['gender'] ?></td>
                    <td><?php echo $employeObj['city'] ?></td>
                    <td><?php echo $employeObj['streetAddress'] ?></td>
                    <td><?php echo $employeObj['state'] ?></td>
                    <td><?php echo $employeObj['age'] ?></td>
                    <td><?php echo $employeObj['postalCode'] ?></td>
                    <td><?php echo $employeObj['phoneNumber'] ?></td>
                    <td>
                        <a href="employee.php?id=<?php echo $employeObj["id"] ?>" class="btn btn-sm btn-info">View</a>
                        <!-- <a class="btn btn-sm btn-success">Update</a> -->
                        <a class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach;; ?>

                
function getEmployee(string $id){
$employeesJSON  = getEmployeesData();

	foreach($employeesJSON as $employeObj){
		// Si el $employeObj == al parametro Id
		if($employeObj['id'] == $id){
			// display current employ
			return $employeObj;
		}
	}
	return null;

}
