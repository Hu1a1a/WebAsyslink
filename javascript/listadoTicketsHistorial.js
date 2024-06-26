$(document).ready(function () {
  var listadoCliente = document.querySelector(".listadoCliente");
  var listadoAdmin = document.querySelector(".listadoAdmin");

  if (listadoCliente != null) {
    // Al principio, se mostraran todos los tickets
    // del usuario. Luego, el usuario podra filtrar.
    $.ajax({
      url: "./php/todosTicketsHistorialCliente.php",
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
        url: "./php/ticketsHistorialCliente.php",
        type: "post",
        data: $("#formTicketsCliente").serialize(),

        success: function (result) {
          listadoCliente.innerHTML = result;
          TicketDetalle();
        },
      });
    });
  } else if (listadoAdmin != null) {
    // Al principio, se mostraran todos los tickets
    // de los usuarios. Luego, se podra filtrar.
    $.ajax({
      url: "./php/todosTicketsHistorialAdmin.php",
      type: "post",
      success: function (result) {
        listadoAdmin.innerHTML = result;
        TicketDetalle();
      },
    });

    // Funcion para obtener el listado de los tickets
    // de un cliente (usuario normal).
    $("#formTicketsAdmin").submit(function (e) {
      e.preventDefault();
      $.ajax({
        url: "./php/ticketsHistorialAdmin.php",
        type: "post",
        data: $("#formTicketsAdmin").serialize(),

        success: function (result) {
          listadoAdmin.innerHTML = result;
          TicketDetalle();
        },
      });
    });
  }
});

function TicketDetalle() {
  for (let i = 0; i < $("button.Detalle").length; i++) {
    $("button.Detalle")[i].href = "ticketsDetalle.html";
  }
}
