<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="biblioteca.css">
</head>

<body>
    <div class="container flex center">
        <div class="quadrado-1 flex column center">
            <div class="titulo">
                <h1>CADASTRAR LIVROS</h1>
            </div>
            <form action="processo.php" method="POST">
                <div class="formulario flex column center">
                    <input type="text" class="input" placeholder="TITULO" id="titulo" name="titulo">
                    <input type="text" class="input" placeholder="AUTOR" id="autor" name="autor">
                    <input type="number" class="input" placeholder="ANO DE PUBLICAÇÃO" id="ano" name="ano">
                    <select class="select" id="categoria" name="categoria">
                        <option value="">CATEGORIA</option>
                        <option value="romance">Romance</option>
                        <option value="didatico">Didático</option>
                        <option value="fantasia">Fantasia</option>
                        <option value="ficcao">Ficção</option>
                        <option value="terror">Terror</option>
                        <option value="biografia">Biografia</option>
                    </select>
                    <input type="number" class="input" placeholder="QUANTIDADE DISPONÍVEL" id="quantidade" name="quantidade">
                </div>
                <div class="botao">
                    <button type="submit" class="cadastrar" onclick="cadastrar()">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>

    <script src="biblioteca.js"></script>
</body>

</html>