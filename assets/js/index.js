const tbody = document.getElementById("tbody");
const formInputs = document.getElementById("formInputs");

// READ Fetch Query - Return OutPut
const renderEmployees = (jsonData) => {
  while (tbody.hasChildNodes()) {
    tbody.removeChild(tbody.firstChild);
  }
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
                <td><a href="employee.php?id=${value.id}" class="btn btn-success">View</a></td>
                <td><a href="#" class="btn btn-danger" onclick="deleteEmployee(${value.id})">Delete</a></td>
                `;
    tbody.appendChild(tr);
  }
};

// Dashboard first View
dashboardPrint();
function dashboardPrint() {
  fetch("./library/employeeController.php?action=listEmployees")
    .then((res) => res.json())
    .then((jsonData) => {
      renderEmployees(jsonData);
    });
}

// ADD NEW Employee (Create - Insert New Employ into json file + Show it on dashboard)
formInputs.addEventListener("submit", () => {
  // e.preventDefault() does not work here
  let dataObj = new FormData(formInputs);

  fetch("./library/employeeController.php?action=createEmploy", {
    method: "POST",
    body: dataObj,
  })
    .then((res) => res.json())
    .then((newEmployeeData) => {
      renderEmployees(newEmployeeData);
    });
});

// Delete Employee
function deleteEmployee(idNum) {
  // Fetch to json data to map the list and delete employee that matchs with ID parameter
  fetch(`./library/employeeController.php?action=deleteEmployee&id=${idNum}`)
    .then((res) => res.json())
    .then((deleteJSON) => {
      renderEmployees(deleteJSON);
    });
}
