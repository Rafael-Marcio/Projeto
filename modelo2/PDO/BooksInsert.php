<?php
    require_once("conexao.php");
    $titulo = $_POST['livro'];
    $ano = $_POST['ano'];
    $editora = $_POST['editora'];
    $autor = $_POST['autor'];

    $result = $pdo->prepare("INSERT INTO ibituruna.livros (titulo,ano,editora,autor) VALUES (:titulo, :ano, :editora, :autor)");
    $result->bindValue(':titulo', "$titulo");
    $result->bindValue(':ano', "$ano");
    $result->bindValue(':editora', "$editora");
    $result->bindValue(':autor', "$autor");
    $count = $result->execute();
    echo "Registro Adicionado.";
?>