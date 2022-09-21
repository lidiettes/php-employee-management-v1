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
                <td><a href="" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>Edit</a></td>
                <td><a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg>Delete</a></td>                
                `
                tbody.appendChild(tr);
            }
    })
}

/* var createBtn = document.getElementById('createBtn');
createBtn.addEventListener("click", addEmoployeeForm()); */




/* function addEmoployee() {
    fetch("library/dataController.php?action=addEmployee", { method: "GET" })
      .then((response) => response.json())
      .then((data) => {
        // console.log(data)
        // console.log(data[0]["name"])
        renderAllEmployees(data);
      });
  } */ 