<link href="../../../assets/css/header.css" rel="stylesheet">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center"><h1 class="sitename">CodigosLivres</h1></a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <?php if (isset($_SESSION['login'])): ?>
          <li class="dropdown"><a href="#"><span><?= $_SESSION['login']['nickname']?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="/user/<?= $_SESSION['login']['nickname'] ?>"><i class="bi bi-person-circle"></i> Ver perfil</a></li>
            <li><a href="#"><i class="bi bi-compass"></i> Configurações</a></li>
            <li class="dropdown"><a href="#"><i class="bi bi-archive"></i> Repositório <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#" style="color: red;"><i class="bi bi-escape"></i> Desconectar</a></li>
          </ul>
        </li>
        
        <?php else: ?>
          <li><a href="/#hero" class="active">Início</a></li>
          <li><a href="/#about">Sobre</a></li>
          <li><a href="/#faq">Perguntas frequentes</a></li>
          <div class="nologin">
            <li><a href="/user/login">Login</a>\<a href="/user/create">Criar conta</a></li>
          </div>
        <?php endif; ?>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>