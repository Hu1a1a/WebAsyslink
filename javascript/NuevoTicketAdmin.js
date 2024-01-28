$(document).ready(function () {
  $("#Eliminar").click(() => Eliminar());
  $("#Enviar").click(() => Enviar());
  $.ajax({
    url: "./php/getClienteList.php",
    type: "get",
    success: (result) => ($("#Cliente")[0].innerHTML = result),
  });
});

function Eliminar() {
  $("#Cliente")[0].selectedIndex = 0;
  $("#Asunto")[0].value = "";
  $("#Texto")[0].value = "";
}
function Enviar() {
  $.ajax({
    url: "./php/NuevoTicket.php",
    type: "post",
    data: {
      Cliente: $("#Cliente")[0].value,
      Asunto: $("#Asunto")[0].value,
      Texto: $("#Texto")[0].value,
    },
    success: function (result) {
      if (result === "Vacío") {
        alert("Ticket con campo vacío!");
      } else {
        alert("Ticket #" + result + " creado con exito!");
        window.location.href = "TicketingAdmin.html";
      }
    },
  });
}
