<?php
// categoria.php

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : 'pos-graduacao-enfermagem';

// Por enquanto vamos deixar fixo só essa categoria.
// Depois, isso vira dinâmico via banco (painel).
$categories = [
  'pos-graduacao-enfermagem' => [
    'title' => 'Pós-graduação em Enfermagem',
    'hero_image' => 'assets/img/cursos/pos-graduacao-enfermagem.jpg',
    'subtitle' => 'Cursos de especialização com foco na prática, professores experientes e suporte completo ao aluno.',
    'courses' => [
      [
        'name' => 'Enfermagem em Dermatologia',
        'desc' => 'Especialização no cuidado da saúde da pele.'
      ],
      [
        'name' => 'Estomaterapia',
        'desc' => 'Especialidade em cuidados com estomias e feridas.'
      ],
      [
        'name' => 'Nefrologia',
        'desc' => 'Enfoque em doenças renais e terapias substitutivas.'
      ],
      [
        'name' => 'Neonatologia',
        'desc' => 'Atenção especializada a recém-nascidos.'
      ],
      [
        'name' => 'Obstetrícia',
        'desc' => 'Foco no cuidado materno e neonatal.'
      ],
      [
        'name' => 'Saúde Pública',
        'desc' => 'Planejamento e execução de políticas públicas de saúde.'
      ],
      [
        'name' => 'Saúde do Trabalhador',
        'desc' => 'Promoção e proteção da saúde em ambientes corporativos.'
      ],
      [
        'name' => 'Urgência e Emergência e UTI',
        'desc' => 'Capacitação para lidar com situações críticas.'
      ],
      [
        'name' => 'Enfermagem em Gestão',
        'desc' => 'Aprimoramento para gestão, liderança e organização de serviços em saúde.'
      ],
      [
        'name' => 'Enfermagem em Centro cirúrgico',
        'desc' => 'Atuação especializada na assistência perioperatória e rotinas de centro cirúrgico.'
      ],
    ]
  ],
];

// Fallback caso venha slug desconhecido
if (!isset($categories[$slug])) {
  $slug = 'pos-graduacao-enfermagem';
}

$page = $categories[$slug];

// Helper simples para gerar slug do curso (para link futuro)
function slugify($text) {
  $text = mb_strtolower($text, 'UTF-8');
  $text = preg_replace('/[áàãâä]/u', 'a', $text);
  $text = preg_replace('/[éèêë]/u', 'e', $text);
  $text = preg_replace('/[íìîï]/u', 'i', $text);
  $text = preg_replace('/[óòõôö]/u', 'o', $text);
  $text = preg_replace('/[úùûü]/u', 'u', $text);
  $text = preg_replace('/[ç]/u', 'c', $text);
  $text = preg_replace('/[^a-z0-9\s-]/u', '', $text);
  $text = preg_replace('/[\s-]+/', '-', $text);
  return trim($text, '-');
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($page['title']); ?> | IEVASF</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

  <!-- HEADER (mesmo do index) -->
  <header class="site-header">
    <div class="container header-row">

      <a class="brand" href="index.php" aria-label="Ir para a página inicial">
        <img src="assets/img/logo.png" alt="Logo" />
      </a>

      <nav class="nav-desktop" aria-label="Menu principal">
        <ul class="nav-links">
          <li><a href="index.php#quem-somos">Quem somos</a></li>
          <li><a href="index.php#cursos">Cursos</a></li>
          <li><a href="index.php#diferenciais">Diferenciais</a></li>
          <li><a href="index.php#depoimentos">Depoimentos</a></li>
          <li><a href="index.php#contato">Contatos</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a class="btn btn-outline" href="index.php#contato">
          Fale conosco
        </a>

        <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-controls="nav-mobile" aria-expanded="false">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>

    </div>

    <div id="nav-mobile" class="nav-mobile" aria-hidden="true">
      <div class="nav-mobile-head">
        <span class="nav-mobile-title">Menu</span>
        <button class="menu-close" type="button" aria-label="Fechar menu">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <ul class="nav-mobile-links">
        <li><a href="index.php#quem-somos">Quem somos</a></li>
        <li><a href="index.php#cursos">Cursos</a></li>
        <li><a href="index.php#diferenciais">Diferenciais</a></li>
        <li><a href="index.php#depoimentos">Depoimentos</a></li>
        <li><a href="index.php#contato">Contatos</a></li>
      </ul>

      <a class="btn btn-primary nav-mobile-cta" href="index.php#contato">
        Fale conosco
      </a>
    </div>

    <div class="nav-overlay" aria-hidden="true"></div>
  </header>

  <!-- HERO DA CATEGORIA -->
  <section class="cat-hero" role="banner" aria-label="Categoria">
    <div class="cat-hero-bg" style="background-image:url('<?php echo htmlspecialchars($page['hero_image']); ?>');"></div>
    <div class="cat-hero-overlay"></div>

    <div class="container cat-hero-content">
      <div class="cat-hero-box">
        <div class="cat-breadcrumb">
          <a href="index.php#cursos"><i class="fa-solid fa-arrow-left"></i> Voltar para categorias</a>
        </div>

        <h1 class="cat-hero-title"><?php echo htmlspecialchars($page['title']); ?></h1>
        <p class="cat-hero-sub"><?php echo htmlspecialchars($page['subtitle']); ?></p>

        <div class="cat-hero-chips">
          <span class="cat-chip"><i class="fa-solid fa-chalkboard-user"></i> Professores experientes</span>
          <span class="cat-chip"><i class="fa-solid fa-laptop"></i> Online ao vivo</span>
          <span class="cat-chip"><i class="fa-solid fa-book-open"></i> Portal do aluno</span>
        </div>
      </div>
    </div>
  </section>

  <!-- LISTA DE CURSOS -->
  <section class="cat-list">
    <div class="container">

      <div class="cat-head">
        <div class="section-kicker">
          <span class="kicker-dot"></span>
          <span class="kicker-text">CURSOS DISPONÍVEIS</span>
        </div>

        <h2 class="section-title">Escolha um curso e acesse os detalhes</h2>
        <p class="cat-subtext">
          Abaixo estão as opções desta categoria. Clique em <b>Acessar Curso</b> para ver informações e próximos passos.
        </p>
      </div>

      <div class="cat-grid">
        <?php foreach ($page['courses'] as $i => $course): 
          $courseSlug = slugify($course['name']);
          $variant = ($i % 2 === 0) ? 'blue' : 'wine'; // alterna azul e vinho
        ?>
          <article class="cat-card cat-card-<?php echo $variant; ?>">
            <div class="cat-card-top">
              <div class="cat-card-ico">
                <?php if($variant === 'blue'): ?>
                  <i class="fa-solid fa-stethoscope"></i>
                <?php else: ?>
                  <i class="fa-solid fa-shield-heart"></i>
                <?php endif; ?>
              </div>

              <div class="cat-card-meta">
                <div class="cat-card-tag">Pós-graduação</div>
                <h3 class="cat-card-title"><?php echo htmlspecialchars($course['name']); ?></h3>
              </div>
            </div>

            <p class="cat-card-desc"><?php echo htmlspecialchars($course['desc']); ?></p>

            <div class="cat-card-foot">
              <a class="btn btn-primary cat-card-btn" href="curso.php?categoria=<?php echo urlencode($slug); ?>&curso=<?php echo urlencode($courseSlug); ?>">
                Acessar Curso
                <i class="fa-solid fa-arrow-right"></i>
              </a>

              <div class="cat-card-mini">
                <i class="fa-solid fa-circle-check"></i>
                <span>Conteúdo prático</span>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- CONTATO + RODAPÉ (mesmos do index) -->
  <section id="contato" class="contact">
    <div class="container contact-grid">

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

      <div class="contact-right">
        <div class="map-card">
          <div class="map-head">
            <h3>Localização</h3>
            <span>Petrolina – PE</span>
          </div>

          <div class="map-frame">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4402.674544452801!2d-40.507067899999996!3d-9.397878400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773705c2dbe5fad%3A0x8cade55ab2f78d75!2sR.%20dos%20Industri%C3%A1rios%2C%2012%20-%20Atr%C3%A1s%20da%20Banca%2C%20Petrolina%20-%20PE%2C%2056308-010!5e1!3m2!1spt-PT!2sbr!4v1772737783356!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        </div>

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

  <script src="assets/js/main.js"></script>
</body>
</html>