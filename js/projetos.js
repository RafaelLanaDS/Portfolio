function checarVisibilidade() {
    document.querySelectorAll('.projeto-item:not(.visivel)').forEach(item => {
      const rect = item.getBoundingClientRect();
      if (rect.top < window.innerHeight - 50) {
        item.classList.add('visivel');
      }
    });
  }

  // Roda no scroll
  window.addEventListener('scroll', checarVisibilidade);

  // Roda ao carregar (para itens já visíveis)
  window.addEventListener('load', checarVisibilidade);