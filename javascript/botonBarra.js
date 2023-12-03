$(document).ready(function() {
    $(document).on('click', '.toggle', function() {
        $('.item').toggleClass('active');
        $('.end').toggleClass('active');
        $('.toggle').toggleClass('active');
    });
});