$(document).ready(function () {
  $(document).on("click", ".toggle", function () {
    $(".item").toggleClass("active");
    $(".end").toggleClass("active");
    $(".toggle").toggleClass("active");
  });

  $("button.cerrarSesion").on("click", function () {
    $.ajax({
      url: "./php/cerrarSesion.php",
      type: "get",
      success: function () {
        window.location.href = "index.php";
      },
    });
    return false;
  });
});
