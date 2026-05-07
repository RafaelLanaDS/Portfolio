(function () {
  const cards   = Array.from(document.querySelectorAll('.carousel-card'));
  const track   = document.getElementById('carouselTrack');
  const dotsWrap = document.getElementById('carouselDots');
  const total   = cards.length;
  let current   = 0;
 
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
    const diff   = ((idx - current) % total + total) % total;
    const signed = diff <= total / 2 ? diff : diff - total;
    if (signed ===  0) return 'center';
    if (signed === -1) return 'left';
    if (signed ===  1) return 'right';
    return 'hidden';
  }
 
  function update() {
    cards.forEach((card, i) => {
      card.className = 'carousel-card carousel-card--' + getSlot(i);
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
 
  /* ---------- SETAS ---------- */
  document.getElementById('arrowLeft') .addEventListener('click', () => goTo(current - 1));
  document.getElementById('arrowRight').addEventListener('click', () => goTo(current + 1));
 
  /* ---------- TECLADO ---------- */
  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowLeft')  goTo(current - 1);
    if (e.key === 'ArrowRight') goTo(current + 1);
  });
 
  /* ---------- DRAG (mouse) + SWIPE (touch) ---------- */
  const THRESHOLD = 50; // px mínimos para considerar arraste
  let startX   = 0;
  let isDragging = false;
  let hasDragged = false;
 
  /* — MOUSE — */
  track.addEventListener('mousedown', e => {
    startX     = e.clientX;
    isDragging = true;
    hasDragged = false;
    track.style.cursor = 'grabbing';
    /* evita arrastar imagens do browser */
    e.preventDefault();
  });
 
  document.addEventListener('mousemove', e => {
    if (!isDragging) return;
    if (Math.abs(e.clientX - startX) > 8) hasDragged = true;
  });
 
  document.addEventListener('mouseup', e => {
    if (!isDragging) return;
    isDragging = false;
    track.style.cursor = 'grab';
 
    const dx = e.clientX - startX;
    if (hasDragged && Math.abs(dx) >= THRESHOLD) {
      goTo(current + (dx < 0 ? 1 : -1));
    }
    hasDragged = false;
  });
 
  /* impede que clique nos cards laterais dispare após um drag */
  track.addEventListener('click', e => {
    if (hasDragged) e.stopPropagation();
  }, true);
 
  /* — TOUCH — */
  let touchStartX = 0;
  track.addEventListener('touchstart', e => {
    touchStartX = e.touches[0].clientX;
  }, { passive: true });
 
  track.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - touchStartX;
    if (Math.abs(dx) >= THRESHOLD) goTo(current + (dx < 0 ? 1 : -1));
  }, { passive: true });
 
  /* cursor padrão grab na área do track */
  track.style.cursor = 'grab';
 
  update();
})();