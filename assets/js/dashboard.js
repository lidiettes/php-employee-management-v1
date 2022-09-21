import "employeeManager.php";

function getEmplyJSON() {
  let dbJSON = getEmployee();
}

//  <?php foreach ($employJson as $employ): ?>
//             <tr>
//                 <td><?php echo $employ['name'] ?></td>
//                 <td><?php echo $employ['lastName'] ?></td>
//                 <td><?php echo $employ['email'] ?></td>
//                 <td><?php echo $employ['gender'] ?></td>
//                 <td><?php echo $employ['city'] ?></td>
//                 <td><?php echo $employ['streetAddress'] ?></td>
//                 <td><?php echo $employ['state'] ?></td>
//                 <td><?php echo $employ['age'] ?></td>
//                 <td><?php echo $employ['postalCode'] ?></td>
//                 <td><?php echo $employ['phoneNumber'] ?></td>
//                 <!-- Action Field -->
//                 <td>
//                     <!-- Get unique Id from json file -->
//                     <!-- Vamos a recibir/enviar el Id  através de GET (en el URL) -->
//                     <a href="employee.php?id=<?php echo $employ['id'] ?>" class="btn btn-sm btn-secondary">View</a>
//                     <a href="employee.php?id=<?php echo $employ['id'] ?>" class="btn btn-sm btn-success">Update</a>
//                     <a href="delete.php?id=<?php echo $employ['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
//                 </td>
//             </tr>
//         <?php endforeach;; ?>
