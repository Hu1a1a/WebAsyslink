$(document).ready(function() {
    $(document).on('click', '.toggle', function() {
        $('.item').toggleClass('active');
        $('.end').toggleClass('active');
        $('.toggle').toggleClass('active');
    });
});

$(document).ready(function() {
    $(document).on('click', '.cerrarSesion', function() {
        $.ajax({
            url: './php/cerrarSesion.php',
            type: 'get',
            success: function() {
                window.location.href = 'index.html';
            }
        });
        return false;
    });
});