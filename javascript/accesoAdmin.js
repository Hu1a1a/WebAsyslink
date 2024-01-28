$(document).ready(function () {
  $.ajax({
    url: "./php/acceso.php",
    type: "post",
    success: function (result) {
      if (result != "admin") {
        var target = document.querySelector("body");
        target.style.backgroundImage = "none";
        var message = "<h1>Error 404: Not found</h1>";
        target.innerHTML = message;
      }
    },
  });
});
