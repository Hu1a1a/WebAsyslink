$(document).ready(function () {
  $("p.actual")[0].innerHTML = "Ticket " + document.URL.split("id=")[1];
  $.ajax({
    url: "./php/getTicketInfo.php",
    type: "POST",
    data: {
      id: document.URL.split("id=")[1],
      level: "Admin",
    },
    success: function (result) {
      $("#listadoCliente")[0].innerHTML = result;
    },
  });
});

function Modificar() {
  $.ajax({
    url: "./php/modificarTicket.php",
    type: "POST",
    data: {
      id: document.URL.split("id=")[1],
      texto: $("textarea")[0].value,
      resolucion: $("textarea")[1].value,
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
      id: document.URL.split("id=")[1],
    },
    success: function (res) {
      getPDF(res);
    },
  });
}

function getPDF(res) {
  window.jsPDF = window.jspdf.jsPDF;
  window.html2canvas = html2canvas;
  var doc = new jsPDF();
  var img = new Image();
  img.src = "imagenes/logo.png";
  doc.addImage(img, "png", 10, 10, 100, 30);
  var text = `
  Ticket: ${document.URL.split("id=")[1]}
  ${$("#Asunto")[0].innerText}
  Estado: Cerrado
  ${$("#FechaA")[0].innerText}
  Fecha de cierre: ${res.split("xAxAx")[1]}
  Descripción: 
  ${$("#Descripcion")[0].value}
  Resolución: 
  ${$("#Resolucion")[0].value}
  `;
  doc.text(text, 10, 40, { maxWidth: 200 });
  var attach = doc.output("datauristring");
  //CONFIGURAR CON LAS CUENTAS EN elasticemail.com
  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "yang.ye.1@hotmail.com",
    Password: "1B45C34A3998FD4AA96D7024CF7291CED145",
    To: res.split("xAxAx")[0], //"Hacer aqui las prubeasyang.ye.1@hotmail.com",
    From: "zx636363@gmail.com",
    Subject: "[Asyslink] - Asunto: " + $("#Asunto")[0].innerHTML + " - Ticket Cerrado",
    Body: "Te adjunto a continuación el resumen del ticket cerrado.",
    Attachments: [
      {
        name: "Resumen Ticket " + document.URL.split("id=")[1] + ".pdf",
        data: attach,
      },
    ],
  })
    .then((message) => alert("Se ha cerrado correctamente el ticket!\rEstado de envio de correo: " + message))
    .then(() => location.reload());
}
