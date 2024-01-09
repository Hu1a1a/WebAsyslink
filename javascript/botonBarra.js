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
                window.location.href = 'index.php';
            }
        });
        return false;
    });

    window.addEventListener('scroll', function() {
        var menu = document.getElementById('navegation');
        var scrollY = window.scrollY;
    
        if (scrollY > 0) {
            menu.style.backgroundColor = '#0053a6f0';
        } else {
           menu.style.backgroundColor = '#0053a6';
        }
    });
});