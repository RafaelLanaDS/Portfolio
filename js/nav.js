$(document).on('click', '.nav-scroll', function(e) {
    e.preventDefault();
    const target = $(this).attr('href');

    let scrollTo;
    if (target === '#home') {
        scrollTo = 0; // sempre topo absoluto
    } else {
        const navH = $('.navbar').outerHeight();
        scrollTo = $(target).offset().top - navH;
    }

    $('html, body').animate({ scrollTop: scrollTo }, 900);
});