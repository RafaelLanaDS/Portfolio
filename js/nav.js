$(document).on('click', '.nav-scroll', function(e) {
    e.preventDefault(); // Impede o salto brusco padrão

    const target = $(this).attr('href'); // Pega o "#home", "#projetos", etc.

    $('html, body').animate({
        scrollTop: $(target).offset().top - 70 // -70 = altura do navbar fixo
    }, 900); // 900ms de duração da animação
});