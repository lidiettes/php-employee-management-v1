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
                <td><a href="employee.php?id=${value.id}" class="btn btn-success">View</a></td>
                <td><button  id="delete-employee" class="btn btn-danger" onclick="deleteEmployee(${value.id})">Delete</button></td>
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
                <td><a href="employee.php?id=${value.id}" class="btn btn-success">View</a></td>
                <td><button  id="delete-employee" class="btn btn-danger" onclick="deleteEmployee(${value.id})">Delete</button></td>
                `;
        tbody.appendChild(tr);
      }
    });
}

// --------------------------------------------
// ADD NEW Employee (Create - Insert new employ into json file + show it on dashboard)

formInputs.addEventListener("submit", () => {
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



// formInputs.addEventListener("updateEmployee",())

// `
// <body>
//     <div class="container">
//         <h1 class="title">Dashboard LoveLance Squad</h1>
//         <a href="../index.php" class="btn btn-sm btn btn-danger p-1"><i class="bi bi-box-arrow-left p-1"></i>Log Out</a>
//         <hr class="border">

//         <div class="content">
//             <!-- Button trigger modal -->
//             <button type="button" class="btn btn-sm btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-plus"></i> New Employee</button>

//             <!-- Modal -->
//             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
//                 <div class="modal-dialog">
//                     <div class="modal-content">
//                         <div class="modal-header">
//                             <h5 class="modal-title" id="exampleModalLabel">New employee data</h5>
//                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//                         </div>
//                     <form method="POST" id="formInputs">    
//                         <div class="modal-body">
//                             <!-- <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">ID</span>
//                                 <input type="text" id="id" name="id" class="form-control" aria-label="id" aria-describedby="addon-wrapping">
//                             </div>
//                             <br> -->
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Name</span>
//                                 <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Last Name</span>
//                                 <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter your last name" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Email</span>
//                                 <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group mb-3">
//                                 <label class="input-group-text" for="inputGroupSelect01">Gender</label>
//                                 <select class="form-select" id="gender" name="gender" id="inputGroupSelect01">
//                                     <option selected>What gender do you identify with?</option>
//                                     <option value="Man">Man</option>
//                                     <option value="Woman">Woman</option>
//                                     <option value="Another">Another</option>
//                                 </select>
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">City</span>
//                                 <input type="text" id="city" name="city" class="form-control" placeholder="What city are you from?" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Street Address</span>
//                                 <input type="text" id="streetAddress " name="streetAddress" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">State</span>
//                                 <input type="text" name="state" class="form-control" placeholder="Enter your state" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Age</span>
//                                 <input type="text" name="age"  class="form-control" placeholder="How old are you?" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Postal Code</span>
//                                 <input type="text" name="postalCode" class="form-control" placeholder="Enter your postal code" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                             <br>
//                             <div class="input-group flex-nowrap">
//                                 <span class="input-group-text" id="addon-wrapping">Phone Number</span>
//                                 <input type="text" name="phoneNumber" class="form-control" placeholder="Enter your phone number" aria-label="Username" aria-describedby="addon-wrapping">
//                             </div>
//                         </div>
//                         <div class="modal-footer">
//                             <button type="button" class="btn btn-danger p-2" data-bs-dismiss="modal"><i class="bi bi-x-circle p-1"></i>Close</button>
//                             <button type="submit" name="submit" class="btn btn-primary p-2"><i class="bi bi-box-arrow-down p-1"></i>Save employee</button>
//                         </div>
//                     </form>    
//                     </div>
//                 </div>
//             </div>
//             `
