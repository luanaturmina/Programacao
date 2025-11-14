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
                    <a class="entrar center flex lado" href="login.html">ENTRAR</a>

                </div>
            </div>
            <div class="quadrado_3 flex">
                <div class="flex">
                <h1 class="flex center margin">CRIE SUA CONTA</h1>
                </div>
                <form action="process.php" method="post">
                <div class="flex center column ">
                    <label for="email"></label>
                    <input type="email" id="nome" placeholder="email" class="nome space" name="email">
                    <label for="senha"></label>
                    <input type="password" id="senha" placeholder="SENHA" class="nome space" name="password">
                    <label for="senha"></label>
                    <input type="password" id="confirmarsenha" placeholder="CONFIRMAR SENHA" class="nome space" name="confirm_password">
                </div>
                <div>
                
                    <button type="submit" class="cadastrar" onclick="cadastrar()">CADASTRAR</button>
                </div>
            </div>
        </div>
    </div> 
    </form>

    <script src="login.js"></script>
</body>
</html>