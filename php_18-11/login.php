<?php
session_start();
require "connection.php";

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);

        if ($senha == $user['senha']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: painel.php");
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
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
                    <h5 class="cima center flex">Ainda não possui uma conta?</h5>
                </div>
                <div class="metade flex">
                    <a class="entrar center flex lado" href="cadastro.php">CADASTRAR</a>

                </div>
            </div>
            <div class="quadrado-3 flex column centralizar">
               <div class="titulo flex final">
                    <h1>ENTRE NA SUA CONTA</h1>
                </div>
               <div class="formulario flex column centralizar">
                    <input type="text" class="nome" placeholder="Digite seu nome" id="nome">
                    <input type="password" class="nome" placeholder="Digite sua senha" id="senha">
               </div>
               <div class="botao">
                    <button type="submit" class="entrar" onclick="entrar()">ENTRAR</button></div>
            </div>
        </div>
    </div> 

    <script src="login.js"></script>
</body>
</html>