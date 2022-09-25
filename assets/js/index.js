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
                <td><a href="#" id="update-employee" class="btn btn-success">Update</a></td>
                <td><a href="#" id="delete-employee" class="btn btn-danger">Delete</a></td>
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
  tbody.addEventListener("click", () => {
    let deleteBTNpressed = e.target.id == "delete-employee";
    // let updateBTNpressed = e.target.id == "update-employee";

    let idNum = e.target.parentElement.dataset.id;
    if (deleteBTNpressed) {
      //deleteBTNpressed= Must be 'true' when clicked
      fetch(
        `./library/employeeController.php?action=deleteEmployee&id=${idNum}`,
        {
          method: "DELETE",
        }
      )
        .then((res) => res.json())
        .then((res) => location.reload());
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
//   fetch(`./library/employeeController.php?action=deleteEmployee&id=${idNum}`)
//     .then((res) => res.json())
//     .then((dataEmployList) => {
//       for (let value of dataEmployList) {
//         let tr = document.createElement("tr");
//         tr.innerHTML = `
//                 <td>${value.id}</td>
//                 <td>${value.name}</td>
//                 <td>${value.email}</td>
//                 <td>${value.age}</td>
//                 <td>${value.streetAddress}</td>
//                 <td>${value.city}</td>
//                 <td>${value.state}</td>
//                 <td>${value.postalCode}</td>
//                 <td>${value.phoneNumber}</td>
//                 <td><a href="#" class="btn btn-success">Update</a></td>
//                 <td><a href="#" class="btn btn-danger" onclick="deleteEmployee(${value.id})>Delete</a></td>
//                 `;
//         tbody.appendChild(tr);
//       }
//     });
// }
