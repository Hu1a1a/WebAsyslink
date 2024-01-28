$(document).ready(function () {
  $("#Eliminar").click(() => Eliminar());
  $("#Enviar").click(() => Enviar());
});
function Eliminar() {
  $("#Asunto")[0].value = "";
  $("#Texto")[0].value = "";
}
function Enviar() {
  $.ajax({
    url: "./php/NuevoTicketCliente.php",
    type: "post",
    data: {
      Asunto: $("#Asunto")[0].value,
      Texto: $("#Texto")[0].value,
    },
    success: function (result) {
      if (result === "Vacío") {
        alert("Ticket con campo vacío!");
      } else {
        alert("Ticket " + result + " creado con exito!");
        window.location.href = "TicketingCliente.php";
      }
    },
  });
}
