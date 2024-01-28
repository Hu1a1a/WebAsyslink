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

function xxxxx() {
  console.log(1);
}
