(function () {
  const cards = Array.from(document.querySelectorAll('.carousel-card'));
  const dotsWrap = document.getElementById('carouselDots');
  const total = cards.length;
  let current = 0;
 
  /* ---------- DOTS ---------- */
  cards.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 'carousel-dot';
    d.setAttribute('role', 'tab');
    d.setAttribute('aria-label', `Projeto ${i + 1}`);
    d.addEventListener('click', () => goTo(i));
    dotsWrap.appendChild(d);
  });
 
  /* ---------- POSIÇÃO ---------- */
  function getSlot(idx) {
    const diff = ((idx - current) % total + total) % total;
    const signed = diff <= total / 2 ? diff : diff - total;
    if (signed === 0)  return 'center';
    if (signed === -1) return 'left';
    if (signed === 1)  return 'right';
    return 'hidden';
  }
 
  function update() {
    cards.forEach((card, i) => {
      card.className = 'carousel-card carousel-card--' + getSlot(i);
      /* clique nos cards laterais navega */
      card.onclick = null;
      const slot = getSlot(i);
      if (slot === 'left')  card.onclick = () => goTo(i);
      if (slot === 'right') card.onclick = () => goTo(i);
    });
 
    document.querySelectorAll('.carousel-dot').forEach((d, i) => {
      d.classList.toggle('carousel-dot--active', i === current);
      d.setAttribute('aria-selected', i === current);
    });
  }
 
  function goTo(idx) {
    current = ((idx % total) + total) % total;
    update();
  }
 
  document.getElementById('arrowLeft') .addEventListener('click', () => goTo(current - 1));
  document.getElementById('arrowRight').addEventListener('click', () => goTo(current + 1));
 
  /* ---------- SWIPE (touch) ---------- */
  let touchStartX = 0;
  const track = document.getElementById('carouselTrack');
  track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
  track.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - touchStartX;
    if (Math.abs(dx) > 40) goTo(current + (dx < 0 ? 1 : -1));
  });
 
  /* ---------- TECLADO ---------- */
  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowLeft')  goTo(current - 1);
    if (e.key === 'ArrowRight') goTo(current + 1);
  });
 
  update();
})();