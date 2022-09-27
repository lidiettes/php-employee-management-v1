// Quick Practice
let formulario = document.getElementById("#formulario");
let respuesta = document.getElementById("#respuesta");

formulario.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("Clickeando en el submit...");

  let datos = new FormData(formulario);
  console.log(datos);
  console.log(datos.get("usuario"));
  console.log(datos.get("pass"));

  fetch("assets/post.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      if (data === "error") {
        respuesta.innerHTML = `<div class="alert alert-danger" role="alert">Llena todos los campos</div>`;
      } else {
        respuesta.innerHTML = `<div class="alert alert-primary" role="alert">${data}</div>`;
      }
    });
});
