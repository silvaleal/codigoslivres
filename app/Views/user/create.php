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

.userCreate {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
    margin-top: 3em;
}

.userCreate form {
    display: flex;
    flex-direction: column;
}

.userCreate input[type="text"],
.userCreate input[type="email"],
.userCreate input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.userCreate input[type="text"]:focus,
.userCreate input[type="email"]:focus,
.userCreate input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
}

.userCreate input::placeholder {
    color: #aaa;
}

.userCreate button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

.userCreate button:hover {
    background-color: #0056b3;
}

</style>

<?php require "app/Views/layouts/head.php" ?>
<?php require "app/Views/layouts/navbar.php" ?>
<div class="userCreate">
    <h2>Registre sua conta!</h2>
    <?= getFlashMsg('createUser') ?>
    <form action="/user/create" method="post">
        <input type="text" name="name" placeholder="Qual é o seu nome?">
        <input type="text" name="nickname" placeholder="Qual é o seu nome de usuário?">
        <input type="email" name="email" placeholder="Qual será o email da conta?">
        <input type="email" name="email2" placeholder="Repita seu email">
        <input type="password" name="password" placeholder="Qual será a sua senha?">
        <input type="password" name="password2" placeholder="Repita sua senha">
        <button type="submit">Confirmar</button>
    </form>
</div>