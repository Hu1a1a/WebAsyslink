$(function(){
    $(".toggle").on("click", function(){
    if($(".item").hasClass("active")) {
        $(".item").removeClass("active");
    }else { $(".item").addClass("active"); }

    if($(".end").hasClass("active")) {
        $(".end").removeClass("active");
    }else { $(".end").addClass("active"); }

    if($(".toggle").hasClass("active")) {
        $(".toggle").removeClass("active");
    }else { $(".toggle").addClass("active"); }
    })
})