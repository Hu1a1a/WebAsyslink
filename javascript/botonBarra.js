$(document).ready(function () {
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
  $(document).on("click", ".toggle", function () {
    console.log("easd")
    $(".item").toggleClass("active");
    $(".end").toggleClass("active");
    $(".toggle").toggleClass("active");
  });
});
