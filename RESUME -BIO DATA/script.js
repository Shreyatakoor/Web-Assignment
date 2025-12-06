$(document).ready(function() {
    $('.fade-in').hide().fadeIn(1000);
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
        $('html, body').animate({ scrollTop: target.offset().top }, 800);
    });
    $('.card').each(function(i) {
        $(this).delay(200 * i).fadeIn(800);
    });
});