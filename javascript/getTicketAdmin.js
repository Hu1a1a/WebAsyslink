$(document).ready(function () {
  id = document.URL.split("id=")[1];
  $("p.actual")[0].innerHTML = "Ticket " + id;
  $.ajax({
    url: "./php/getTicketInfo.php",
    type: "POST",
    data: {
      id,
      level: "Admin",
    },
    success: function (result) {
      $("#listadoCliente")[0].innerHTML = result;
    },
  });
});

function Modificar() {
  texto = $("textarea")[0].value;
  resolucion = $("textarea")[1].value;
  $.ajax({
    url: "./php/modificarTicket.php",
    type: "POST",
    data: {
      id,
      texto,
      resolucion,
    },
    success: function () {
      alert("Se ha modificado correctamente!");
    },
  });
}
function Cerrar() {
  $.ajax({
    url: "./php/cerrarTicket.php",
    type: "POST",
    data: {
      id,
    },
    success: function (r) {
      location.reload();
      alert("Ticket se ha cerrado correctamente!");
    },
  });
}
