$(document).ready(function () {
  var listadoCliente = document.querySelector(".listadoCliente");

  if (listadoCliente != null) {
    // Al principio, se mostraran todos los tickets
    // del usuario. Luego, el usuario podra filtrar.
    $.ajax({
      url: "./php/todosTicketsCursoAdmin.php",
      type: "post",
      success: function (result) {
        listadoCliente.innerHTML = result;
        TicketDetalle();
      },
    });

    // Funcion para obtener el listado de los tickets
    // de un cliente (usuario normal).
    $("#formTicketsCliente").submit(function (e) {
      e.preventDefault();
      $.ajax({
        url: "./php/ticketsCursoAdmin.php",
        type: "post",
        data: {
          orden: $("#orden")[0].value,
          Cliente: $("#Cliente")[0].value,
        },
        success: function (result) {
          listadoCliente.innerHTML = result;
          TicketDetalle();
        },
      });
    });
  }
  $.ajax({
    url: "./php/getClienteList.php",
    type: "get",
    success: (result) => ($("#Cliente")[0].innerHTML = result),
  });
});

function TicketDetalle() {
  for (let i = 0; i < $(".Detalle").length; i++) {
    $(".Detalle")[i].click(function () {
      window.location = "/ticketsDetalle.html";
    });
  }
}
