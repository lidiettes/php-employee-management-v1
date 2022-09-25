const tbody = document.getElementById("tbody");
const formInputs = document.getElementById("formInputs");

dashboardPrint();
function dashboardPrint() {
  fetch("./library/employeeController.php?action=listEmployees")
    .then((res) => res.json())
    .then((employees) => {
      // Value=objetos que trae
      for (let value of employees) {
        let tr = document.createElement("tr");
        tr.innerHTML += `
                <td>${value.id}</td>
                <td>${value.name}</td>
                <td>${value.email}</td>
                <td>${value.age}</td>
                <td>${value.streetAddress}</td>
                <td>${value.city}</td>
                <td>${value.state}</td>
                <td>${value.postalCode}</td>
                <td>${value.phoneNumber}</td>
                <td><a href="#" class="btn btn-success">Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
                
                `;
        tbody.appendChild(tr);
      }
    });
}

// --------------------------------------------

formInputs.addEventListener("submit", () => {
  // e.preventDefault();
  let data = new FormData(formInputs);

  fetch("./library/employeeController.php?action=createEmploy", {
    method: "POST",
    body: data,
  })
    .then((res) => res.json())
    .then((newEmployees) => {
      // Value=objetos que trae
      for (let i = 0; i <= newEmployees.lenght; i++) {
        let tr = document.createElement("tr");
        tr.innerHTML += `
<<<<<<< HEAD
                <td>${datos[i].name}</td>
                <td>${datos[i].email}</td>
                <td>${datos[i].age}</td>
                <td>${datos[i].streetAddress}</td>
                <td>${datos[i].city}</td>
                <td>${datos[i].state}</td>
                <td>${datos[i].postalCode}</td>
                <td>${datos[i].phoneNumber}</td>
=======
                <td>${newEmployees[i].id}</td>
                <td>${newEmployees[i].name}</td>
                <td>${newEmployees[i].email}</td>
                <td>${newEmployees[i].age}</td>
                <td>${newEmployees[i].streetAddress}</td>
                <td>${newEmployees[i].city}</td>
                <td>${newEmployees[i].state}</td>
                <td>${newEmployees[i].postalCode}</td>
                <td>${newEmployees[i].phoneNumber}</td>

>>>>>>> 8deaea29c6161355f4fe21e02810128a0d1c79e4
                <td><a href="#" class="btn btn-success">Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
                `;
        tbody.appendChild(tr);
      }
    });
});

// function deleteEmployee(idNum) {
//   fetch(`./library/employeeController.php?action=delete&id=${idNum}`)
//     .then((res) => res.json())
//     .then((data) => {
//       while (tbody.hasChildNodes()) {
//         tbody.removeChild(tbody.firstChild);
//       }

<<<<<<< HEAD
function deleteEmployee(idNum) {
  fetch(`../src/library/employeeController.php?action=delete&id=${idNum}`)
    .then((res) => res.json())
    .then((data) => {
      data.forEach((employee) => {
        while (tbody.hasChildNodes()) {
          tbody.removeChild(tbody.firstChild);
        }
        for (let i = data.length - 1; i >= 0; i--) {
          let tr = document.createElement("tr");
          tr.innerHTML = `
                <td>${data[i].name}</td>
                <td>${data[i].email}</td>
                <td>${data[i].age}</td>
                <td>${data[i].streetAddress}</td>
                <td>${data[i].city}</td>
                <td>${data[i].state}</td>
                <td>${data[i].postalCode}</td>
                <td>${data[i].phoneNumber}</td>
                <td><a class="btn btn-sm btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</a></td>
                <td><a href="" class="btn btn-sm btn btn-success"onclick="Employee(${data[i].id})>Update</a></td>
                <a href="update.php?v=view&id=<?= $user["id"]?>" class="btn btn-outline-secondary"><i class="fas fa-user-edit"></i></a>
                `;
          tbody.appendChild(tr);
        }
      });
    });
}

=======
//       for (let i = data.length - 1; i >= 0; i--) {
//         let tr = document.createElement("tr");
//         tr.innerHTML = `
//                     <td>${data[i].name}</td>
//                     <td>${data[i].email}</td>
//                     <td>${data[i].age}</td>
//                     <td>${data[i].streetAddress}</td>
//                     <td>${data[i].city}</td>
//                     <td>${data[i].state}</td>
//                     <td>${data[i].postalCode}</td>
//                     <td>${data[i].phoneNumber}</td>
//                     <td><button class="btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
//                     <td><a href="" class="btn btn-sm btn btn-success">Update</a></td>
//                     `;
//         tbody.appendChild(tr);
//       }
//     });
// }
>>>>>>> 8deaea29c6161355f4fe21e02810128a0d1c79e4
