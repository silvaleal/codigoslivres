<?php require "layouts/head.php" ?>
<link href="../../assets/css/home.css" rel="stylesheet">

<body class="container">
    <?php require "layouts/navbar.php" ?>

    <div class="">
        <div class="recentsrepos">
            <h3>Repositórios recentes</h3>
            <li>
                <?php foreach ($repo->getLimitRepositorys(20) as $value): ?>
                    <div class="repo">
                        <a href=""><?= $value['title'] ?></a>
                    </div>
                <?php endforeach ?>
            </li>
        </div>
        <div class="users">
            <h3>Usuários destaques</h3>
            <li>
                <?php foreach ($user->getLimitUsers(20) as $value): ?>
                    <div class="repo">
                        <a href=""><?= $value['nickname'] ?></a>
                    </div>
                <?php endforeach ?>
            </li>
        </div>

    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/aos/aos.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>