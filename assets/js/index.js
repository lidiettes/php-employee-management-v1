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
                <td>${newEmployees[i].id}</td>
                <td>${newEmployees[i].name}</td>
                <td>${newEmployees[i].email}</td>
                <td>${newEmployees[i].age}</td>
                <td>${newEmployees[i].streetAddress}</td>
                <td>${newEmployees[i].city}</td>
                <td>${newEmployees[i].state}</td>
                <td>${newEmployees[i].postalCode}</td>
                <td>${newEmployees[i].phoneNumber}</td>

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
