

VANTA.NET({
      el: '#vanta-bg',          /* aplica no div interno, não na section */
      THREE: THREE,
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200,
      minWidth: 200,
      scale: 1.0,
      scaleMobile: 1.0,
 
      /* ── Cores — ajuste aqui à vontade ── */
      backgroundColor: 0x0d0d0d,   /* fundo escuro igual ao #0D0D0D do Rafael */
      color: 0xb36ef5,             /* roxo claro igual ao --purple-lt */
 
      /* ── Densidade da rede ── */
      points: 8.0,        /* quantidade de pontos  (↑ = mais denso) */
      maxDistance: 20.0,  /* alcance das linhas    (↑ = mais linhas) */
      spacing: 17.0,      /* espaçamento da grade  (↑ = mais espaçado) */
      showDots: true
    });