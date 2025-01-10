
<?php require 'app/Views/layouts/head.php'; ?>
<link href="../../assets/css/repository/delete.css" rel="stylesheet">
<body>
    <?php require 'app/Views/layouts/navbar.php'; ?>
    <div class="container">
        <h2>Tem certeza disso?</h2>
        <p>Uma vez que um repositório for deletado, nada poderá ser recuperado.</p>

        <form action="/repository/<?=$repo['id']?>/delete" method="post">
            <input type="checkbox" name="e" placeholder="eee">
            <label for="">Selecionar para concordar que está ciente que, ao deletar o repositório, nunca poderá ser recuperado.</label>
            <div><button type="submit" class="btn btn-danger">Deletar</button></div>
        </form>
    </div>
</body>