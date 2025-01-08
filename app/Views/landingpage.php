<?php include 'layouts/head.php'; ?>
<link href="../../assets/css/landingpage.css" rel="stylesheet">

<body class="index-page">
  <?php include "layouts/navbar.php"; ?>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4 justify-content-center align-items-center" style="margin-top: 1em">
          <div class="col-lg-8 d-flex flex-column justify-content-center text-center" data-aos="fade-in">
            <h1>A plataforma para seu projeto <span>open-source!</span></h1>
            <p>Somos uma iniciativa dedicada a impulsionar a comunidade de código aberto. Nossa missão é oferecer suporte, promover a colaboração e ajudar você a transformar suas ideias em realidade.</p>
            <div class="d-flex justify-content-center" style="gap: 1em">
              <a href="/user/login" class="btn-get-started">Seja um membro</a>
              <a href="<?= GITHUB_REPO ?>" target="_blank" style="display: flex; align-items: center;">Visite nosso repositório!</a>
            </div>
          </div>
        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
          <div class="col-xl-12">
            <div class="row gy-4 icon-boxes">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Lista de novos projetos</h3>
                  <p>Aumentamos a chance de seu projeto ser analisado por outros programadores adicionando ele em um espaço de fácil acesso.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Página exclusiva para os projetos</h3>
                  <p>Esta página possui comentários e opções especiais para o autor.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Moderação ativa</h3>
                  <p>Não aceitamos pessoas com a intenção de atrapalhar ou enganar os nossos usuários. <a href="#">Leia nossas regras.</a></p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Sistema de pontos</h3>
                  <p>Cada "gostei" recebido em seus comentários rende 5 pontos para sua conta. Quanto mais pontos você acumular, maior será sua posição no ranking de maiores contribuidores da comunidade.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Usuários</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projetos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Comentários</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Membros na equipe</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->


    <!-- Seção FAQ -->
    <section id="faq" class="faq section light-background">

      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Perguntas </span><strong>Frequentes</strong></h3>
              <p>
                Encontre respostas para as perguntas mais comuns sobre o CodigoLivre, ajudando você a entender melhor como nossa plataforma pode conectar desenvolvedores de todo o mundo.
              </p>
            </div>
            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Como posso criar uma conta?</h3>
                <div class="faq-content">
                  <p>Para criar uma conta, clique no botão "Criar conta" no canto superior direito da página inicial e preencha o formulário de inscrição com seus dados básicos. Após isso, você estará pronto para entrar em nossa comunidade.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fim do item FAQ-->
              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Posso sofrer algum tipo de punição?</h3>
                <div class="faq-content">
                  <p>Sim, monitoramos nossa plataforma diariamente para garantir o cumprimento das diretrizes. Qualquer violação das regras pode resultar em advertências, suspensões ou até banimento da conta, dependendo da gravidade da infração. Nosso objetivo é manter um ambiente seguro e colaborativo para todos os usuários.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fim do item FAQ-->
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="../../assets/imgs/faq.svg" class="img-fluid" alt="Imagem FAQ" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>
      </div>
    </section><!-- /Seção FAQ -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../assets/js/main.js"></script>

</body>

</html>