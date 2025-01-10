<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #eef2f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }

    form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

    form div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="url"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        height: 100px;
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }


</style>

<?php require "app/Views/layouts/head.php" ?>
<?php require "app/Views/layouts/navbar.php" ?>
<div class="container">
    <h2>Registre sua conta!</h2>
    <?= getFlashMsg('createPost') ?>
    <form action="/repository/create" method="post">
    <div>
        <label for="title">Qual o título?</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="description">Qual a descrição do repositório?</label>
        <input type="text" id="short_description" name="short_description" required>
    </div>
    <div>
        <label for="link">Qual o link do repositório?</label>
        <input type="url" id="url" name="url" required>
    </div>
    <div>
        <label for="content">Escreva o conteúdo</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit">Enviar</button>
</form>
</div>