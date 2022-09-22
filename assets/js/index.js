const tbody = document.getElementById("tbody");
const formData = document.getElementById("formData");

dashboardPrint();
function dashboardPrint() {
  fetch("./library/employeeController.php?action=listEmployees")
    .then((res) => res.json())
    .then((employees) => {
      // Value=objetos que trae
      for (let value of employees) {
        let tr = document.createElement("tr");
        tr.innerHTML += `
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

formData.addEventListener("submit", () => {
  let data = new FormData(formData);

  fetch("./library/employeeController.php?action=newEmploy", {
    headers: {
      "Content-type": "appplication/json",
    },
    body: data,
  })
    .then((res) => res.json())
    .then((datos) => {
      // Value=objetos que trae
      for (let i = 0; i < datos.length; i++) {
        let tr = document.createElement("tr");
        tr.innerHTML += `
                <td>${datos[i].name}</td>
                <td>${datos[i].email}</td>
                <td>${datos[i].age}</td>
                <td>${datos[i].streetAddress}</td>
                <td>${datos[i].city}</td>
                <td>${datos[i].state}</td>
                <td>${datos[i].postalCode}</td>
                <td>${datos[i].phoneNumber}</td>

                <td><a href="#" class="btn btn-success">Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
                `;
        tbody.appendChild(tr);
      }
    });
});
