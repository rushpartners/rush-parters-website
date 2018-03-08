$(document).ready(function () {
    $('body').on('click', '[rush-navbar-item]', function (e) {
        e.preventDefault();

        $('html, body').animate({
            'scrollTop': $($(this).attr('href')).offset().top
        }, 2000);
    })
});