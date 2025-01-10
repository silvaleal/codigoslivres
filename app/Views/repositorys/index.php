<?php include 'app/Views/layouts/head.php'; ?>
<link href="../../assets/css/repository.css" rel="stylesheet">
<body class="container">
    <?php include 'app/Views/layouts/navbar.php'; ?>

    <main>
        <div class="title">
            <div class="text">
                <h2><?= $repo['title'] ?></h2>
                <div class="buttons">
                    <a href="<?= htmlspecialchars($repo['url']) ?>" class="btn btn-primary" target="_blank"><i class="bi bi-bookmark-fill"></i></a>
                </div>
            </div>
            <div>
                <p><?= $repo['short_description'] ?></p>
            </div>
        </div>
        <div class="description">
            <p><?= $repo['description'] ?></p>
        </div>
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/aos/aos.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>