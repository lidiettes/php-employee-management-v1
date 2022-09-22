// function addEmoployee(){
//     fetch("library/dataController.php?action=addEmployee", { method: "GET" })
//         .then(response => response.json())
//         .then(data => {
//             // console.log(data)
//             // console.log(data[0]["name"])
//             renderAllEmployees(data);
//         });
//     }

const tbody = document.getElementById('tbody');

dashboardPrint();

function dashboardPrint(){

    fetch ('./library/employeeController.php?action=list')
        .then(res => res.json())
        .then(data => {
            while(tbody.hasChildNodes()){
                tbody.removeChild(tbody.firstChild);
            }
            for(let i = data.length - 1; i >= 0; i--) {
                let tr = document.createElement('tr');
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
                <td><a href="" class="btn btn-sm btn btn-success" >Update</a></td>
                `
                tbody.appendChild(tr);
                console.log('hola');
            }
    })
}


function deleteEmployee(idNum){

    fetch (`../src/library/employeeController.php?action=delete&id=${idNum}`)
        .then(res => res.json())
        .then(data => {
            data.forEach(employee => {
            while(tbody.hasChildNodes()){
                tbody.removeChild(tbody.firstChild);
            }
            for(let i = data.length - 1; i >= 0; i--) {
                let tr = document.createElement('tr');
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
                <td><a href="" class="btn btn-sm btn btn-success">Update</a></td>
                `
                tbody.appendChild(tr);
            }
    });
})
}
