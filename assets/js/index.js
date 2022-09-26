const tbody = document.getElementById("tbody");
const formInputs = document.getElementById("formInputs");

// READ and Send fetch data from json file
const renderEmployees = (jsonData) => {
  // console.log(employees);
  // Value=objetos que trae
  for (let value of jsonData) {
    let tr = document.createElement("tr");
    tr.innerHTML += `
                <td>${value.id}</td>
                <td>${value.name}</td>
                <td>${value.lastName}</td>
                <td>${value.email}</td>
                <td>${value.gender}</td>
                <td>${value.city}</td>
                <td>${value.streetAddress}</td>
                <td>${value.state}</td>
                <td>${value.age}</td>
                <td>${value.postalCode}</td>
                <td>${value.phoneNumber}</td>
                <td><button class="btn btn-outline-info"><i class="far fa-eye" data-viewId=<?= $employee["id"]?></i></button></td>
                <td><button class="btn btn-outline-secondary"><i class="fas fa-user-edit"></i></button></td>
                <td><button id="delete-employee" class="btn btn-outline-danger" onclick="deleteEmployee(${value.id})"><i class="far fa-trash-alt"></i></button></td>
                `;



    tbody.appendChild(tr);
  }
};

dashboardPrint();
function dashboardPrint() {
  fetch("./library/employeeController.php?action=listEmployees")
    .then((res) => res.json())
    .then((jsonData) => {
      renderEmployees(jsonData);
    });
}

function deleteEmployee(idNum) {
  fetch(`./library/employeeController.php?action=deleteEmployee&id=${idNum}`)
    .then((res) => res.json())
    .then((deleteJSON) => {
      while (tbody.hasChildNodes()) {
        tbody.removeChild(tbody.firstChild);
      }
      for (let value of deleteJSON) {
        let tr = document.createElement("tr");
        tr.innerHTML += `
                <td>${value.id}</td>
                <td>${value.name}</td>
                <td>${value.lastName}</td>
                <td>${value.email}</td>
                <td>${value.gender}</td>
                <td>${value.city}</td>
                <td>${value.streetAddress}</td>
                <td>${value.state}</td>
                <td>${value.age}</td>
                <td>${value.postalCode}</td>
                <td>${value.phoneNumber}</td>
                <td><button class="btn btn-outline-info"><i class="far fa-eye" data-viewId=<?= $employee["id"]?></i></button></td>
                <td><button  id="update-employee" class="btn btn-success">Update</button></td>
                <td><button  id="delete-employee" class="btn btn-outline-danger" onclick="deleteEmployee(${value.id})"><i class="far fa-trash-alt"></i></button></td>
                `;
        tbody.appendChild(tr);
      }
    });
}

// --------------------------------------------
// ADD NEW Employee (Create - Insert new employ into json file + show it on dashboard)

formInputs.addEventListener("submit", () => {
  // Necesitamos instanciarlo ya que sino en el body: tendríamos que poner JSON.strinfy (para convertirlo en un objeto)
  // Además tendríamos que especificar que valores quiero enviar
  let dataObj = new FormData(formInputs);

  fetch("./library/employeeController.php?action=createEmploy", {
    method: "POST",
    body: dataObj,
  })
    .then((res) => res.json())
    .then((newEmployeeData) => {
      // Le envío al Render (que nos pinta la tabla un nuevo Objeto con los datos del Input)
      renderEmployees(newEmployeeData);
    });
});

// --------------------------------------------

// function deleteEmployee(idNum) {
//   tbody.addEventListener("click", () => {
//     let deleteBTNpressed = e.target.id == "delete-employee";
//     // let updateBTNpressed = e.target.id == "update-employee";

//     let idNum = e.target.parentElement.dataset.id;
//     if (deleteBTNpressed) {
//       //deleteBTNpressed= Must be 'true' when clicked
//       fetch(
//         `./library/employeeController.php?action=deleteEmployee&id=${idNum}`,
//         {
//           method: "DELETE",
//         }
//       )
//         .then((res) => res.json())
//         .then((res) => location.reload());
//     }
//   });
// }
