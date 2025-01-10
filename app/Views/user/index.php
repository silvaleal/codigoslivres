<?php include 'app/Views/layouts/head.php'; ?>
<link href="../../assets/css/user.css" rel="stylesheet">
<body class="container">
    <?php include 'app/Views/layouts/navbar.php'; ?>

    <main>
        <section class="profile">
            <div class="profile-left">
                <img src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg" alt="">
            </div>
            <div class="profile-right">
                <div class="profile-title">
                    <h2><?= $user['name']; ?></h2>
                </div>
                <div>
                    <li>
                    <p class="btn btn-primary"><?= '<i class="bi bi-calendar"></i> '.date('d/m/Y', strtotime($user['create_at'])) ?></p>
                    </li>
                </div>
            </div>
            
        </section>
        <section class="repositorys">
            <div class="repositorys-title">
                <h2>Repositórios</h2>
                <?php if (isset($_SESSION['login'])): ?>
                    <li><a href="/repository/create" class="btn btn-success"><i class="bi bi-file-earmark-plus-fill"></i></a></li>
                <?php endif; ?>
            </div>
            <div class="repositorys-list">
                <?php foreach ($repos as $repo) : ?>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title"><?= htmlspecialchars($repo['title']) ?></h5>
                            </div>
                            <div class="card-items">
                                <a href="/repository/<?=$repo['id'] ?>" class="btn btn-primary"><i class="bi bi-bookmark-fill"></i></a>
                                <?php if (isset($_SESSION['login'])): ?>
                                    <a href="#" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/aos/aos.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>