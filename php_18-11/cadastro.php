<?php
require "connection.php";

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];

    $sql = "INSERT INTO user (email, senha, confirmarSenha)
            VALUES ('$email', '$senha', '$confirmarSenha')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit;
    } else {
        $erro = "Erro ao cadastrar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container flex center">
        <div class="quadrado-1 flex">
            <div class="flex quadrado-2 center column">
                <div class="metade center baixo column">
                    <h1 class="cima center flex">Bem-vindo</h1>
                    <h5 class="cima center flex">Acesse sua conta agora</h5>
                </div>
                <div class="metade flex">
                    <a class="entrar center flex lado" href="login.php">ENTRAR</a>
                </div>
            </div>
            <div class=" quadrado-3 flex center">
                <div class="flex-column">
                <h1 style="text-align: center;">CRIE SUA CONTA</h1>
                <form action="process.php" method="POST">
                    <div class="formulario flex column centralizar">
                        <label for="EMAIL"></label>
                        <input type="EMAIL" id="nome" placeholder="E-mail" class="nome space" name="email">
                        <label for="senha"></label>
                        <input type="password" id="senha" placeholder="SENHA" class="nome space" name="password">
                        <label for="senha"></label>
                        <input type="password" id="confirmarSenha" placeholder="CONFIRMAR SENHA" class="nome space" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary a" onclick="cadastrar()">CADASTRAR</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>