$(document).on('click', '.nav-scroll', function(e) {
    e.preventDefault();
    const target = $(this).attr('href');
    const navHeight = $('.navbar').outerHeight(); // mede a altura real

    $('html, body').animate({
        scrollTop: $(target).offset().top - navHeight // funciona pra todas
    }, 900);
});

// Ajusta a hero para exatamente a área visível abaixo da navbar
function ajustarHero() {
  const navH = document.querySelector('.navbar').offsetHeight;
  document.querySelector('#home').style.minHeight = (window.innerHeight - navH) + 'px';
}

ajustarHero(); // roda ao carregar
window.addEventListener('resize', ajustarHero); // roda ao redimensionar