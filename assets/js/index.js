const tbody = document.getElementById("tbody");
const formInputs = document.getElementById("formInputs");

function deleteEmployee(idNum) {
  fetch(`./library/employeeController.php?action=delete&id=${idNum}`)
      .then((res) => res.json())
      .then((data) => {
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
                  <td><button class="btn btn-sm btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
                  <td><a href="" class="btn btn-sm btn btn-success">Update</a></td>
                  `;
              tbody.appendChild(tr);
          }
      });
}


const renderEmployees = (jsonData) => {
  
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
                <td><button id="update-employee" class="btn btn-success">Update</button></td>
                <td><button id="delete-employee" class="btn btn-danger">Delete</a></td>
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
























// <dashboardPrint();
// function dashboardPrint() {
//     fetch("./library/employeeController.php?action=listEmployees")
//         .then((res) => res.json())
//         .then((data) => {
//             while (tbody.hasChildNodes()) {
//                 tbody.removeChild(tbody.firstChild);
//             }
//             for (let i = data.length - 1; i >= 0; i--) {
//                 let tr = document.createElement("tr");
//                 tr.innerHTML = `
//                 <td>${data[i].name}</td>
//                 <td>${data[i].email}</td>
//                 <td>${data[i].age}</td>
//                 <td>${data[i].streetAddress}</td>
//                 <td>${data[i].city}</td>
//                 <td>${data[i].state}</td>
//                 <td>${data[i].postalCode}</td>
//                 <td>${data[i].phoneNumber}</td>
//                 <td><button class="btn btn-sm btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
//                 <td><a href="" class="btn btn-sm btn btn-success" >Update</a></td>
//                 `;
//                 tbody.appendChild(tr);
//                 console.log("hola");
//             }
//         });
// }



// // --------------------------------------------

// formInputs.addEventListener("submit", () => {
//   // e.preventDefault();
//   let dataObj = new FormData(formInputs);

//   fetch("./library/employeeController.php?action=createEmploy", {
//     method: "POST",
//     body: dataObj,
//   })
//     .then((res) => res.json())
//     .then((newEmployees) => {
//       // Value=objetos que trae
//       for (let i = data.length - 1; i >= 0; i--) {
//         let tr = document.createElement("tr");
//         tr.innerHTML = `
//         <td>${data[i].name}</td>
//         <td>${data[i].email}</td>
//         <td>${data[i].age}</td>
//         <td>${data[i].streetAddress}</td>
//         <td>${data[i].city}</td>
//         <td>${data[i].state}</td>
//         <td>${data[i].postalCode}</td>
//         <td>${data[i].phoneNumber}</td>
//         <td><button class="btn btn-sm btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
//         <td><a href="" class="btn btn-sm btn btn-success" >Update</a></td>
//         `;
//         tbody.appendChild(tr);
//         console.log("hola");
//     }
//     });
// });



// formData.addEventListener("submit", () => {
//     let data = new FormData(formData);

//     fetch("./library/employeeController.php?action=newEmploy", {
//         headers: {
//             "Content-type": "application/json",
//         },
//         body: data,
//     })
//         .then((res) => res.json())
//         .then((datos) => {
//             // Value=objetos que trae
//             for (let i = 0; i < datos.length; i++) {
//                 let tr = document.createElement("tr");
//                 tr.innerHTML += `
//                   <td>${datos[i].name}</td>
//                   <td>${datos[i].email}</td>
//                   <td>${datos[i].age}</td>
//                   <td>${datos[i].streetAddress}</td>
//                   <td>${datos[i].city}</td>
//                   <td>${datos[i].state}</td>
//                   <td>${datos[i].postalCode}</td>
//                   <td>${datos[i].phoneNumber}</td>
  
//                   <td><a href="#" class="btn btn-success">Update</a></td>
//                   <td><button class="btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
//                   `;
//                 tbody.appendChild(tr);
//             }
//         });
// });


