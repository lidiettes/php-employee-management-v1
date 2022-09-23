const tbody = document.getElementById("tbody");
const formData = document.getElementById("formData");

// --------------------------------------------

dashboardPrint();
function dashboardPrint() {
    fetch("./library/employeeController.php?action=list")
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
                <td><button class="btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
                <td><a href="" class="btn btn-sm btn btn-success" >Update</a></td>
                `;
                tbody.appendChild(tr);
                console.log("hola");
            }
        });
}



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
                    <td><button class="btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
                    <td><a href="" class="btn btn-sm btn btn-success">Update</a></td>
                    `;
                tbody.appendChild(tr);
            }
        });
}

formData.addEventListener("submit", () => {
    let data = new FormData(formData);

    fetch("./library/employeeController.php?action=newEmploy", {
        headers: {
            "Content-type": "application/json",
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
                  <td><button class="btn btn-success" onclick="deleteEmployee(${data[i].id})">Delete</button></td>
                  `;
                tbody.appendChild(tr);
            }
        });
});

