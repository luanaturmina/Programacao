<?php

include("connection.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO livros (titulo, autor, ano, categoria, quantidade) VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";

if($conn->query($sql) === TRUE){
    echo "Livro cadastrado com sucesso!";
    header("Location: lista.php");
}
else{
    echo "Erro:" . $sql . "<br>" . $conn->error;
}

$conn->close();