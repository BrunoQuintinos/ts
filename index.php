<?php
// index.php
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Instituição - Página Inicial</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

  <!-- HEADER -->
  <header class="site-header">
    <div class="container header-row">

      <!-- Logo -->
      <a class="brand" href="index.php" aria-label="Ir para a página inicial">
        <img src="assets/img/logo.png" alt="Logo" />
      </a>

      <!-- Menu desktop (central) -->
      <nav class="nav-desktop" aria-label="Menu principal">
        <ul class="nav-links">
          <li><a href="#quem-somos">Quem somos</a></li>
          <li><a href="#cursos">Cursos</a></li>
          <li><a href="#diferenciais">Diferenciais</a></li>
          <li><a href="#depoimentos">Depoimentos</a></li>
          <li><a href="#contato">Contatos</a></li>
        </ul>
      </nav>

      <!-- CTA + hamburger -->
      <div class="header-actions">
        <a class="btn btn-outline" href="#contato">
          Fale conosco
        </a>

        <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-controls="nav-mobile" aria-expanded="false">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>

    </div>

    <!-- Menu Mobile (dropdown) -->
    <div id="nav-mobile" class="nav-mobile" aria-hidden="true">
      <div class="nav-mobile-head">
        <span class="nav-mobile-title">Menu</span>
        <button class="menu-close" type="button" aria-label="Fechar menu">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <ul class="nav-mobile-links">
        <li><a href="#quem-somos">Quem somos</a></li>
        <li><a href="#cursos">Cursos</a></li>
        <li><a href="#diferenciais">Diferenciais</a></li>
        <li><a href="#depoimentos">Depoimentos</a></li>
        <li><a href="#contato">Contatos</a></li>
      </ul>

      <a class="btn btn-primary nav-mobile-cta" href="#contato">
        Fale conosco
      </a>
    </div>

    <!-- Overlay do mobile -->
    <div class="nav-overlay" aria-hidden="true"></div>
  </header>

  <!-- HERO / BANNER -->
  <section class="hero" role="banner" aria-label="Destaque principal">
    <div class="hero-bg" style="background-image:url('assets/img/banner.jpg');"></div>
    <div class="hero-overlay"></div>

    <div class="container hero-content">
      <div class="hero-left">
        <h1 class="hero-title">
          Formação profissional com qualidade, experiência e estrutura completa
        </h1>

        <p class="hero-subtitle">
          Cursos desenvolvidos para preparar profissionais com conhecimento prático,
          professores experientes e suporte completo ao aluno.
        </p>

        <a class="btn btn-primary hero-cta" href="#cursos">
          Conheça nossos cursos
        </a>
      </div>
    </div>
  </section>



<section id="quem-somos" class="about">
  <div class="container about-grid">

    <!-- Coluna esquerda -->
    <div class="about-left">
      <div class="section-kicker">
        <span class="kicker-dot"></span>
        <span class="kicker-text">QUEM SOMOS</span>
      </div>

      <h2 class="section-title">
        O IEVASF forma profissionais com ensino de qualidade, estrutura moderna e metodologia focada no aprendizado real.
      </h2>

      <div class="about-text">
        <p>
          O IEVASF é uma instituição dedicada à formação e capacitação profissional, comprometida em oferecer ensino de
          qualidade por meio de professores experientes, estrutura moderna e metodologia focada no aprendizado real.
        </p>

        <p>
          Localizado em área central de Petrolina, o instituto proporciona fácil acesso aos alunos, além de oferecer uma
          combinação eficiente entre ensino presencial e aulas online ao vivo.
        </p>

        <p>
          Nosso objetivo é proporcionar conhecimento acessível, atualizado e aplicável, preparando os alunos para os
          desafios do mercado de trabalho com confiança, competência e segurança.
        </p>
      </div>

      <div class="about-actions">
        <a class="btn btn-primary" href="#cursos">
          Conheça nossos cursos
        </a>
        <a class="btn btn-ghost" href="#contato">
          <i class="fa-solid fa-location-dot"></i>
          Ver localização
        </a>
      </div>
    </div>

    <!-- Coluna direita (cards) -->
    <div class="about-right">
      <div class="about-card">
        <div class="about-card-head">
          <div class="about-badge">
            <i class="fa-solid fa-shield-halved"></i>
            Ensino com segurança e suporte
          </div>
          <div class="about-card-title">Por que o IEVASF?</div>
        </div>

        <div class="about-points">
          <div class="point">
            <div class="point-ico"><i class="fa-solid fa-chalkboard-user"></i></div>
            <div class="point-txt">
              <strong>Professores experientes</strong>
              <span>Didática e prática para acelerar seu aprendizado.</span>
            </div>
          </div>

          <div class="point">
            <div class="point-ico"><i class="fa-solid fa-laptop"></i></div>
            <div class="point-txt">
              <strong>Aulas online ao vivo</strong>
              <span>Interação real com o professor e tira-dúvidas.</span>
            </div>
          </div>

          <div class="point">
            <div class="point-ico"><i class="fa-solid fa-building"></i></div>
            <div class="point-txt">
              <strong>Estrutura presencial</strong>
              <span>Atendimento em área central, com fácil acesso.</span>
            </div>
          </div>

          <div class="point">
            <div class="point-ico"><i class="fa-solid fa-book-open"></i></div>
            <div class="point-txt">
              <strong>Material e suporte</strong>
              <span>Portal do aluno com conteúdo e acompanhamento.</span>
            </div>
          </div>
        </div>
      </div>

      <div class="about-stats">
        <div class="stat">
          <div class="stat-top">
            <i class="fa-solid fa-bolt"></i>
            <span>Metodologia</span>
          </div>
          <div class="stat-main">Aprender fazendo</div>
        </div>

        <div class="stat">
          <div class="stat-top">
            <i class="fa-solid fa-location-dot"></i>
            <span>Localização</span>
          </div>
          <div class="stat-main">Centro de Petrolina</div>
        </div>
      </div>
    </div>

  </div>

  <!-- Linha com ícones (highlights) -->
  <div class="about-strip">
    <div class="container about-strip-inner">
      <div class="strip-item">
        <i class="fa-solid fa-flask"></i>
        <span>Cursos práticos de verdade!</span>
      </div>

      
      <div class="strip-item">
        <i class="fa-solid fa-stethoscope"></i>
        <span>Pós Graduação em Saúde</span>
      </div>

      <div class="strip-item">
        <i class="fa-solid fa-microscope"></i>
        <span>Cursos Profissionalizantes</span>
      </div>

      <div class="strip-item">
        <i class="fa-solid fa-syringe"></i>
        <span>Especialização Tec. de Enfermagem</span>
      </div>
    </div>
  </div>
</section>



<section id="cursos" class="courses">
  <div class="container">

    <div class="courses-head">
      <div class="section-kicker">
        <span class="kicker-dot"></span>
        <span class="kicker-text">NOSSOS CURSOS</span>
      </div>

      <h2 class="section-title">
        Cursos estruturados por especialidade, com foco no conhecimento prático e suporte completo ao aluno.
      </h2>

      <p class="courses-subtext">
        O IEVASF oferece cursos estruturados por especialidade, desenvolvidos para atender diferentes áreas de formação
        profissional. Nossos programas são planejados para oferecer conhecimento prático, com acompanhamento de professores
        experientes e material completo disponível no portal do aluno.
      </p>
    </div>

    <div class="courses-grid courses-grid-images">

      <!-- Card 1 -->
      <article class="course-img-card">
        <div class="course-img">
          <img src="assets/img/cursos/pos-graduacao-enfermagem.jpg" alt="Pós-graduação em Enfermagem">
          <div class="course-img-overlay"></div>
          <div class="course-img-badge">
            <i class="fa-solid fa-stethoscope"></i>
            Enfermagem
          </div>
        </div>

        <div class="course-img-body">
          <h3 class="course-img-title">Pós-graduação em Enfermagem</h3>
          <p class="course-img-desc">
            Formação avançada para profissionais que buscam aprofundamento, atualização e diferenciação no mercado,
            com foco em prática e aplicação real.
          </p>

          <a class="btn btn-primary course-img-btn" href="categoria.php?slug=pos-graduacao-enfermagem">
            Ver cursos
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="course-img-card">
        <div class="course-img">
          <img src="assets/img/cursos/especializacao-tecnica-enfermagem.jpg" alt="Especialização técnica em Enfermagem">
          <div class="course-img-overlay"></div>
          <div class="course-img-badge">
            <i class="fa-solid fa-syringe"></i>
            Técnico
          </div>
        </div>

        <div class="course-img-body">
          <h3 class="course-img-title">Especialização técnica em Enfermagem</h3>
          <p class="course-img-desc">
            Capacitação voltada ao aprimoramento técnico, com conteúdos direcionados à rotina profissional e
            desenvolvimento de competências práticas.
          </p>

          <a class="btn btn-primary course-img-btn" href="categoria.php?slug=especializacao-tecnica-enfermagem">
            Ver cursos
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="course-img-card">
        <div class="course-img">
          <img src="assets/img/cursos/profissionalizantes.jpg" alt="Profissionalizantes">
          <div class="course-img-overlay"></div>
          <div class="course-img-badge">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            Mercado
          </div>
        </div>

        <div class="course-img-body">
          <h3 class="course-img-title">Profissionalizantes</h3>
          <p class="course-img-desc">
            Programas de formação voltados à qualificação profissional e desenvolvimento de competências práticas
            para ingressar e evoluir no mercado.
          </p>

          <a class="btn btn-primary course-img-btn" href="categoria.php?slug=profissionalizantes">
            Ver cursos
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="course-img-card course-img-card-accent">
        <div class="course-img">
          <img src="assets/img/cursos/cursos-livres.jpg" alt="Cursos livres">
          <div class="course-img-overlay"></div>
          <div class="course-img-badge">
            <i class="fa-solid fa-book-open"></i>
            Rápidos
          </div>
        </div>

        <div class="course-img-body">
          <h3 class="course-img-title">Cursos livres</h3>
          <p class="course-img-desc">
            Cursos objetivos para atualização e desenvolvimento de habilidades específicas, com aplicação prática e
            suporte ao aluno durante a jornada.
          </p>

          <a class="btn btn-primary course-img-btn" href="categoria.php?slug=cursos-livres">
            Ver cursos
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

    </div>
  </div>
</section>





<section id="diferenciais" class="diff">
  <div class="container">

    <div class="diff-head">
      <div class="diff-kicker">
        <span class="diff-dot"></span>
        <span class="diff-kicker-text">NOSSOS DIFERENCIAIS</span>
      </div>

      <div class="diff-title-row">
        <h2 class="diff-title">Estrutura, método e suporte para você aprender de verdade.</h2>
        <p class="diff-sub">
          No IEVASF, a experiência do aluno é construída com metodologia ativa, ensino híbrido e um padrão elevado de
          organização — do presencial ao digital.
        </p>
      </div>
    </div>

    <!-- Faixa de números -->
    <div class="diff-stats">
      <div class="diff-stat">
        <div class="diff-stat-ico"><i class="fa-solid fa-flag-checkered"></i></div>
        <div class="diff-stat-txt">
          <strong>+10</strong>
          <span>turmas lançadas</span>
        </div>
      </div>

      <div class="diff-stat">
        <div class="diff-stat-ico"><i class="fa-solid fa-circle-check"></i></div>
        <div class="diff-stat-txt">
          <strong>+8</strong>
          <span>turmas concluídas</span>
        </div>
      </div>

      <div class="diff-stat">
        <div class="diff-stat-ico"><i class="fa-solid fa-ranking-star"></i></div>
        <div class="diff-stat-txt">
          <strong>Nota 4</strong>
          <span>no MEC (UniFis)</span>
        </div>
      </div>
    </div>

    <!-- Grid de diferenciais -->
    <div class="diff-grid">

      <article class="diff-card diff-card-accent">
        <div class="diff-ico"><i class="fa-solid fa-person-chalkboard"></i></div>
        <h3 class="diff-card-title">Metodologia Ativa</h3>
        <p class="diff-card-desc">
          Participação constante do aluno, aulas práticas e estágio supervisionado para desenvolver segurança na rotina profissional.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-arrows-rotate"></i></div>
        <h3 class="diff-card-title">Ensino Híbrido</h3>
        <p class="diff-card-desc">
          Combinação eficiente entre aprendizado online e interação em aulas práticas presenciais.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-certificate"></i></div>
        <h3 class="diff-card-title">Certificação</h3>
        <p class="diff-card-desc">
          Diploma da Faculdade UniFis (Centro Universitário FIS), com Nota 4 no MEC.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-building-columns"></i></div>
        <h3 class="diff-card-title">Alto padrão de ensino</h3>
        <p class="diff-card-desc">
          Infraestrutura, corpo docente e organização didático-pedagógica em alto nível.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-location-dot"></i></div>
        <h3 class="diff-card-title">Localização Central</h3>
        <p class="diff-card-desc">
          Unidade em área central de Petrolina, com fácil acesso a diversas linhas de ônibus.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-user-group"></i></div>
        <h3 class="diff-card-title">Equipe de professores</h3>
        <p class="diff-card-desc">
          Professores capacitados, experientes e com didática no ensino superior.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-book-open-reader"></i></div>
        <h3 class="diff-card-title">Portal do aluno</h3>
        <p class="diff-card-desc">
          Material completo disponível no portal, com suporte e acompanhamento da jornada do aluno.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-laptop"></i></div>
        <h3 class="diff-card-title">Estrutura digital</h3>
        <p class="diff-card-desc">
          Aulas online ao vivo com professores que interagem, tiram dúvidas e acompanham o aprendizado.
        </p>
      </article>

      <article class="diff-card">
        <div class="diff-ico"><i class="fa-solid fa-house-chimney-medical"></i></div>
        <h3 class="diff-card-title">Estrutura física</h3>
        <p class="diff-card-desc">
          Atendimento presencial em área bem localizada da cidade de Petrolina.
        </p>
      </article>

    </div>
  </div>
</section>




<section id="depoimentos" class="social">
  <div class="container">

    <div class="social-head">
      <div class="section-kicker">
        <span class="kicker-dot"></span>
        <span class="kicker-text">PROVA SOCIAL</span>
      </div>

      <h2 class="section-title">Histórias reais de quem já viveu a experiência IEVASF.</h2>
      <p class="social-subtext">
        Depoimentos de alunos sobre nossos cursos, estrutura e metodologia. Uma formação pensada para gerar confiança,
        prática e resultados.
      </p>
    </div>

    <!-- VÍDEOS -->
    <div class="social-block">
      <div class="social-block-title">
        <h3>Depoimentos em vídeo</h3>
        <p>Poucos vídeos, diretos e reais — clique para assistir.</p>
      </div>

      <div class="video-grid">
        <!-- Video item 1 -->
        <button class="video-card" type="button"
          data-video="assets/videos/depoimento-1.mp4"
          aria-label="Assistir depoimento em vídeo 1">
          <div class="video-thumb">
            <img src="assets/img/depoimentos/video-thumb-1.jpg" alt="Depoimento em vídeo 1">
            <span class="video-play"><i class="fa-solid fa-play"></i></span>
          </div>
          <div class="video-meta">
            <span class="video-name">Aluno(a) — Curso X</span>
            <span class="video-mini">Ver depoimento</span>
          </div>
        </button>

        <!-- Video item 2 -->
        <button class="video-card" type="button"
          data-video="assets/videos/depoimento-2.mp4"
          aria-label="Assistir depoimento em vídeo 2">
          <div class="video-thumb">
            <img src="assets/img/depoimentos/video-thumb-2.jpg" alt="Depoimento em vídeo 2">
            <span class="video-play"><i class="fa-solid fa-play"></i></span>
          </div>
          <div class="video-meta">
            <span class="video-name">Aluno(a) — Curso Y</span>
            <span class="video-mini">Ver depoimento</span>
          </div>
        </button>

        <!-- Video item 3 -->
        <button class="video-card" type="button"
          data-video="assets/videos/depoimento-3.mp4"
          aria-label="Assistir depoimento em vídeo 3">
          <div class="video-thumb">
            <img src="assets/img/depoimentos/video-thumb-3.jpg" alt="Depoimento em vídeo 3">
            <span class="video-play"><i class="fa-solid fa-play"></i></span>
          </div>
          <div class="video-meta">
            <span class="video-name">Aluno(a) — Curso Z</span>
            <span class="video-mini">Ver depoimento</span>
          </div>
        </button>
      </div>
    </div>

    <!-- FOTOS + DEPOIMENTOS -->
    <div class="social-block">
      <div class="social-block-title">
        <h3>Depoimentos de alunos</h3>
        
      </div>

      <div class="testi-grid">

        <!-- Depoimento 1 -->
        <article class="testi-card">
          <div class="testi-top">
            <div class="testi-avatar">
              <img src="assets/img/depoimentos/aluno-1.jpg" alt="Foto do aluno 1">
            </div>
            <div class="testi-id">
              <strong>Nome do aluno</strong>
              <span>Curso / Categoria</span>
            </div>
          </div>

          <p class="testi-text">
            “Texto curto do depoimento do aluno. Uma frase objetiva sobre prática, professores e estrutura.”
          </p>

          <div class="testi-foot">
            <span class="testi-chip"><i class="fa-solid fa-circle-check"></i> Experiência real</span>
            <span class="testi-chip"><i class="fa-solid fa-bolt"></i> Aprendi na prática</span>
          </div>
        </article>

        <!-- Depoimento 2 -->
        <article class="testi-card">
          <div class="testi-top">
            <div class="testi-avatar">
              <img src="assets/img/depoimentos/aluno-2.jpg" alt="Foto do aluno 2">
            </div>
            <div class="testi-id">
              <strong>Nome do aluno</strong>
              <span>Curso / Categoria</span>
            </div>
          </div>

          <p class="testi-text">
            “Texto curto do depoimento do aluno. Pode destacar aulas online ao vivo e suporte do portal do aluno.”
          </p>

          <div class="testi-foot">
            <span class="testi-chip"><i class="fa-solid fa-laptop"></i> Online ao vivo</span>
            <span class="testi-chip"><i class="fa-solid fa-book-open"></i> Material completo</span>
          </div>
        </article>

        <!-- Depoimento 3 -->
        <article class="testi-card">
          <div class="testi-top">
            <div class="testi-avatar">
              <img src="assets/img/depoimentos/aluno-3.jpg" alt="Foto do aluno 3">
            </div>
            <div class="testi-id">
              <strong>Nome do aluno</strong>
              <span>Curso / Categoria</span>
            </div>
          </div>

          <p class="testi-text">
            “Texto curto do depoimento do aluno. Algo sobre confiança, didática e experiência dos professores.”
          </p>

          <div class="testi-foot">
            <span class="testi-chip"><i class="fa-solid fa-chalkboard-user"></i> Professores</span>
            <span class="testi-chip"><i class="fa-solid fa-shield-halved"></i> Segurança</span>
          </div>
        </article>

        <!-- Depoimento 4 -->
        <article class="testi-card">
          <div class="testi-top">
            <div class="testi-avatar">
              <img src="assets/img/depoimentos/aluno-4.jpg" alt="Foto do aluno 4">
            </div>
            <div class="testi-id">
              <strong>Nome do aluno</strong>
              <span>Curso / Categoria</span>
            </div>
          </div>

          <p class="testi-text">
            “Texto curto do depoimento do aluno. Pode falar sobre estrutura presencial, localização e organização.”
          </p>

          <div class="testi-foot">
            <span class="testi-chip"><i class="fa-solid fa-location-dot"></i> Fácil acesso</span>
            <span class="testi-chip"><i class="fa-solid fa-building"></i> Estrutura</span>
          </div>
        </article>

      </div>
    </div>

  </div>

  <!-- MODAL / LIGHTBOX VÍDEO -->
  <div class="video-modal" aria-hidden="true">
    <div class="video-modal-overlay"></div>

    <div class="video-modal-content" role="dialog" aria-modal="true" aria-label="Depoimento em vídeo">
      <button class="video-modal-close" type="button" aria-label="Fechar vídeo">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <div class="video-modal-frame">
        <video id="socialVideo" controls playsinline></video>
      </div>
    </div>
  </div>
</section>







<section id="contato" class="contact">
  <div class="container contact-grid">

    <!-- Coluna esquerda -->
    <div class="contact-left">
      <div class="contact-kicker">
        <span class="contact-dot"></span>
        <span class="contact-kicker-text">CONTATO</span>
      </div>

      <h2 class="contact-title">Fale com a gente</h2>
      <p class="contact-sub">
        Tire dúvidas, solicite informações e receba orientação sobre os cursos e matrículas.
        Nossa equipe responde o mais rápido possível.
      </p>

      <div class="contact-info">

        <div class="contact-item">
          <div class="contact-ico"><i class="fa-solid fa-location-dot"></i></div>
          <div class="contact-txt">
            <strong>Endereço</strong>
            <span>Tv. Dos industriaários, 12 – Atras da Banca – Petrolina – PE, CEP 56308-010</span>
          </div>
        </div>

        <a class="contact-item contact-link" href="https://wa.me/5587999160561" target="_blank" rel="noopener">
          <div class="contact-ico"><i class="fa-brands fa-whatsapp"></i></div>
          <div class="contact-txt">
            <strong>WhatsApp</strong>
            <span>(87) 99916-0561</span>
          </div>
          <i class="fa-solid fa-arrow-up-right-from-square contact-ext"></i>
        </a>

        <a class="contact-item contact-link" href="mailto:Diretoria@ievasf.com">
          <div class="contact-ico"><i class="fa-solid fa-envelope"></i></div>
          <div class="contact-txt">
            <strong>E-mail</strong>
            <span>Diretoria@ievasf.com</span>
          </div>
          <i class="fa-solid fa-arrow-up-right-from-square contact-ext"></i>
        </a>

      </div>
    </div>

    <!-- Coluna direita -->
    <div class="contact-right">

      <!-- Mapa / imagem -->
      <div class="map-card">
        <div class="map-head">
          <h3>Localização</h3>
          <span>Petrolina – PE</span>
        </div>

        <!-- Coloque uma imagem/print do Google Maps aqui -->
        <div class="map-frame">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4402.674544452801!2d-40.507067899999996!3d-9.397878400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773705c2dbe5fad%3A0x8cade55ab2f78d75!2sR.%20dos%20Industri%C3%A1rios%2C%2012%20-%20Atr%C3%A1s%20da%20Banca%2C%20Petrolina%20-%20PE%2C%2056308-010!5e1!3m2!1spt-PT!2sbr!4v1772737783356!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
      </div>

      <!-- Formulário -->
      <div class="form-card">
        <h3>Envie uma mensagem</h3>

        <form class="contact-form" method="post" action="contato.php">
          <div class="form-row">
            <label>
              <span>Seu nome</span>
              <input type="text" name="nome" placeholder="Digite seu nome" required>
            </label>

            <label>
              <span>Seu telefone</span>
              <input type="tel" name="telefone" placeholder="(00) 00000-0000" required>
            </label>
          </div>

          <label>
            <span>Sua mensagem</span>
            <textarea name="mensagem" rows="5" placeholder="Escreva sua mensagem..." required></textarea>
          </label>

          <button class="btn btn-primary form-btn" type="submit">
            Enviar mensagem
            <i class="fa-solid fa-paper-plane"></i>
          </button>

          <p class="form-mini">
            Ao enviar, você concorda em ser contatado pela equipe do IEVASF.
          </p>
        </form>
      </div>

    </div>

  </div>
</section>

<footer class="footer">
  <div class="container footer-row">
    <a class="footer-insta" href="https://instagram.com/ievasfpetrolina" target="_blank" rel="noopener">
      <i class="fa-brands fa-instagram"></i>
      @ievasfpetrolina
    </a>

    <span class="footer-copy">Todos direitos reservados...</span>
  </div>
</footer>


  <!-- JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>