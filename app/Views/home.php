<?php require "layouts/head.php" ?>
<link href="../../assets/css/home.css" rel="stylesheet">

<body>
    <!-- <?php require "layouts/navbar.php" ?> -->

    <div class="">
        <div class="recentsrepos">
            <h3>Repositórios recentes</h3>
            <li>
                <?php foreach ($repo->getAll() as $value): ?>
                    <div class="repo">
                        <a href=""><?= $value['title'] ?></a>
                    </div>
                <?php endforeach ?>
            </li>
        </div>
        <div class="users">
            <h3>Usuários destaques</h3>
            <li>
                <?php foreach ($repo->getAll() as $value): ?>
                    <div class="repo">
                        <a href=""><?= $value['title'] ?></a>
                    </div>
                <?php endforeach ?>
            </li>
        </div>

    </div>
</body>