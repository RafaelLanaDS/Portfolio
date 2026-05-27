$(document).on('click', '.nav-scroll', function(e) {
    e.preventDefault();
    const target = $(this).attr('href');

    // Home vai pro topo absoluto, demais seções descontam a navbar
    const offset = target === '#home' ? 0 : 65;

    $('html, body').animate({
        scrollTop: $(target).offset().top - offset
    }, 900);
});