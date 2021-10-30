$(document).ready(function () {
  var funcion;
  llenar_productos();

  async function llenar_productos() {
    funcion = "llenar_productos";
    let data = await fetch("pagesJSON/productoTiendaController.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: "funcion=" + funcion,
    });
    if (data.ok) {
      let response = await data.text();
      try {
        let productos = JSON.parse(response);
        console.log(productos);
      } catch (error) {
        console.error(error);
        console.log(response);
      }
    } else {
    }
  }
});
