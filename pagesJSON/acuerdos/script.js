var module = document.querySelector("#contenido-acuerdos");

window.addEventListener("DOMContentLoaded", (e) => {
  e.preventDefault();
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "pagesJSON/acuerdos/acuerdos.json", true);
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      let datos = JSON.parse(this.responseText);
      console.log(datos);
      Mostrar(datos);
    }
  };
});

function Mostrar(datos) {
  module.innerHTML = "";
  for (var i = 0; i < datos.length; i++) {
    module.innerHTML += `
          <div class="acuerdos-paragraph">
        <h2>${datos[i].titulo}</h2>
        <p class="acuerdos-paragraph-text">
          ${datos[i].descripcion}
        </p></div>`;
  }
}
