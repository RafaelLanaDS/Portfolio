<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rafael Lana – Front-End Developer</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

      <a class="navbar-brand" href="#sobre">Rafael Lana</a>

      <button class="navbar-toggler border-0 shadow-none" type="button"
        data-bs-toggle="collapse" data-bs-target="#navMenu"
        aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list text-white fs-4"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end gap-2" id="navMenu">
        <ul class="navbar-nav align-items-lg-center gap-1 me-3">
          <li class="nav-item"><a class="nav-link nav-scroll" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-scroll" href="#projetos">Projetos</a></li>
          <li class="nav-item"><a class="nav-link nav-scroll" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link nav-scroll" href="#credenciais">Credenciais</a></li>
          <li class="nav-item"><a class="nav-link nav-scroll" href="#contato">Contato</a></li>
        </ul>
      </div>

    </div>
  </nav>
  <section id="home" class="hero">
    <div class="container">

      <p class="hero-greeting">Olá, meu nome é Rafael Lana</p>

      <div class="hero-headline-row">
        <span class="hero-title-white">Front-End</span>

        <!-- Social Icons -->
        <div class="hero-social-icons">
          <a href="#" class="social-icon-btn" title="Portfolio">
            <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="Portfolio Icon" class="social-icon">
            <img src="<?php echo base_url('assets/img/linkdlen.png'); ?>" alt="Portfolio Icon" class="social-icon">
            <img src="<?php echo base_url('assets/img/instagram.png'); ?>" alt="Portfolio Icon" class="social-icon">
          </a>
        </div>
      </div>

      <span class="hero-title-purple">Developer</span>

      <p class="hero-desc">
        Desenvolvedor focado em criar experiências digitais memoráveis e
        interfaces de alta performance que conectam marcas e pessoas.
      </p>

    </div>
  </section>
  <section id="projetos" class="projetos">
    <img src="<?php echo base_url('assets/img/degrade-fundo-1.png'); ?>" alt="" class="fundo-img">

    <div class="projetos-wrapper">

      <!-- Título no topo, largura total -->
      <h2 class="projetos-titulo">Projetos</h2>

      <!-- Linha das imagens + descrições abaixo -->
      <div class="projetos-colunas">

        <!-- Esquerda -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel.png'); ?>" alt="Projeto 1" class="projeto-img">
          <div class="descricao">
            <h3>King Burguer</h3>
            <div class="techs">
              <span>HTML</span><span>CSS</span><span>JS</span>
            </div>
            <p>Landing page responsiva de hamburgueria com carrossel, animações e múltiplas seções promocionais</p>
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>

        <!-- Direita -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel-lado-direito.png'); ?>" alt="Projeto 2" class="projeto-img">
          <div class="descricao">
            <h3>Ecommerce</h3>
            <div class="techs">
              <span>React</span><span>Node</span><span>CSS</span>
            </div>
            <p>Loja virtual com listagem de produtos e carrinho
            <p>
              <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
                <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
                Projeto
              </a>
          </div>
        </div>

      </div>
      <div class="projetos-colunas">

        <!-- Esquerda -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel.png'); ?>" alt="Projeto 1" class="projeto-img">
          <div class="descricao">
            <h3>King Burguer</h3>
            <div class="techs">
              <span>HTML</span><span>CSS</span><span>JS</span>
            </div>
            <p>Landing page de hamburgueria desenvolvida com</p>
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>

        <!-- Direita -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel-lado-direito.png'); ?>" alt="Projeto 2" class="projeto-img">
          <div class="descricao">
            <h3>Ecommerce</h3>
            <div class="techs">
              <span>React</span><span>Node</span><span>CSS</span>
            </div>
            <p>Loja virtual com listagem de produtos e carrinho
            <p>
              <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
                <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
                Projeto
              </a>
          </div>
        </div>

      </div>

      <div class="projetos-colunas">

        <!-- Esquerda -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel.png'); ?>" alt="Projeto 1" class="projeto-img">
          <div class="descricao">
            <h3>King Burguer</h3>
            <div class="techs">
              <span>HTML</span><span>CSS</span><span>JS</span>
            </div>
            <p>Landing page de hamburgueria desenvolvida com</p>
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>

        <!-- Direita -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel-lado-direito.png'); ?>" alt="Projeto 2" class="projeto-img">
          <div class="descricao">
            <h3>Ecommerce</h3>
            <div class="techs">
              <span>React</span><span>Node</span><span>CSS</span>
            </div>
            <p>Loja virtual com listagem de produtos e carrinho
            <p>
              <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
                <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
                Projeto
              </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="sobre" class="competencias">
    <div class="competencias-wrapper">

      <h2 class="projetos-titulo">Competências</h2>
      <p class="competencias-sub">Essas são as habilidades e tecnologias que domino:</p>

      <div class="competencias-grid">

        <div class="comp-bloco">
          <div class="name-linguagen">HTML/CSS</div>
          <p>Criação de interfaces semânticas, responsivas e acessíveis. Domínio de Flexbox, Grid, animações CSS e boas práticas de estruturação de código.</p>
        </div>

        <div class="comp-bloco">
          <div class="name-linguagen">JavaScript</div>
          <p>Desenvolvimento de interfaces dinâmicas e interativas no front-end, além de APIs e aplicações server-side com Node.js e seus ecossistemas.</p>
        </div>

        <div class="comp-bloco">
          <div class="name-linguagen">PHP</div>
          <p>Desenvolvimento back-end com PHP e framework CodeIgniter nas versões 3 e 4. Criação de sistemas MVC, rotas, models, controllers e integração com banco de dados.</p>
        </div>

        <div class="comp-bloco">
          <div class="name-linguagen">MySql</div>
          <p>Design e implementação de bancos de dados relacionais com MySQL. Criação de tabelas, consultas SQL e otimização de desempenho.</p>
        </div>

      </div>
    </div>
  </section>

  <section id="credenciais">
    <div class="competencias-wrapper">
      <h2 class="projetos-titulo">Credenciais</h2>
      <p class="competencias-sub">Certificados e conquistas obtidas ao longo da carreira</p>
    </div>
    <div class="cred-grid">

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">Python 3 — Mundo 1</p>
        <div class="cred-tags">
          <span class="cred-tag">Python</span>
          <span class="cred-tag">40h</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Mar. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">Python 3 — Mundo 2</p>
        <div class="cred-tags">
          <span class="cred-tag">Python</span>
          <span class="cred-tag">40h</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Abr. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">Python 3 — Mundo 3</p>
        <div class="cred-tags">
          <span class="cred-tag">Python</span>
          <span class="cred-tag">40h</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Jun. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">HTML5 e CSS3 — Módulo 4</p>
        <div class="cred-tags">
          <span class="cred-tag">HTML</span>
          <span class="cred-tag">CSS</span>
          <span class="cred-tag">40h</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Mar. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">PHP Moderno — Módulo 1 VIP</p>
        <div class="cred-tags">
          <span class="cred-tag">PHP</span>
          <span class="cred-tag">Back-end</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Out. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">MySQL — 40 Horas</p>
        <div class="cred-tags">
          <span class="cred-tag">MySQL</span>
          <span class="cred-tag">Banco de Dados</span>
          <span class="cred-tag">40h</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Nov. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">JavaScript — 40 Horas</p>
        <div class="cred-tags">
          <span class="cred-tag">JavaScript</span>
          <span class="cred-tag">40h</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Dez. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

      <div class="cred-card">
        <div class="cred-logo">CeV</div>
        <p class="cred-issuer">Curso em Vídeo</p>
        <p class="cred-name">Mini Curso de UX e UI</p>
        <div class="cred-tags">
          <span class="cred-tag">UX</span>
          <span class="cred-tag">UI</span>
          <span class="cred-tag">Design</span>
        </div>
        <div class="cred-footer">
          <span class="cred-date">Jun. 2025</span>
          <span class="cred-badge">Concluído</span>
        </div>
      </div>

    </div>
  </section>

  <!-- SEÇÃO CONTATO -->
  <section id="contato">
    <div class="contato-inner">

      <!-- Coluna esquerda: info -->
      <div class="contato-info">
        <p class="contato-info-label">Vamos conversar?</p>
        <h2 class="contato-info-title">Contato</h2>
        <p class="contato-info-desc">
          Tem um projeto em mente ou quer apenas dar um oi? Preencha o formulário e responderei o mais rápido possível.
        </p>

        <div class="contato-item">
          <div class="contato-icon">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="4" width="20" height="16" rx="2" />
              <path d="M2 7l10 7 10-7" />
            </svg>
          </div>
          <span class="contato-item-text">rafael.lanads@outlook.com</span>
        </div>

        <div class="contato-item">
          <div class="contato-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
              <circle cx="12" cy="9" r="2.5" />
            </svg>
          </div>
          <span class="contato-item-text">São Paulo, Brasil</span>
        </div>
      </div>

      <!-- Coluna direita: formulário -->
      <div class="contato-form-card">
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Nome</label>
            <input class="form-input" type="text" placeholder="Seu nome completo" />
          </div>
          <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-input" type="email" placeholder="seu@email.com" />
          </div>
        </div>

        <div class="form-group full">
          <label class="form-label">Mensagem</label>
          <textarea class="form-textarea" placeholder="Como posso ajudar?"></textarea>
        </div>

        <button class="form-btn">Enviar Mensagem</button>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-inner">

      <a class="footer-brand" href="#">
        <div class="footer-logo">
          <!-- Ícone borboleta simplificado -->
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 12 C10 8, 4 6, 3 2 C3 2, 8 4, 12 12 C16 4, 21 2, 21 2 C20 6, 14 8, 12 12 Z" />
            <path d="M12 12 C10 16, 4 18, 3 22 C3 22, 8 20, 12 12 C16 20, 21 22, 21 22 C20 18, 14 16, 12 12 Z" />
          </svg>
        </div>
        <span class="footer-brand-name">Portfolio 2024</span>
      </a>

      <p class="footer-copy">© Todos os direitos reservados.</p>

      <nav class="footer-links">
        <a href="https://linkedin.com" target="_blank">LinkedIn</a>
        <a href="https://github.com" target="_blank">GitHub</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
      </nav>

    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url('assets/js/nav.js'); ?>"></script>
  <script src="<?= base_url('assets/js/projetos.js'); ?>"></script>
</body>

</html>