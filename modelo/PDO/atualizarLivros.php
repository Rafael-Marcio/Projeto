<?php
    require_once("conexao.php");
    require_once('../Biblioteca/biblioteca.php');
    $id = $_GET['id'];
    $titulo = $_GET['livro'];
    $autor = $_GET['autor'];
    $editora = $_GET['editora'];
    $ano = $_GET['ano'];
    
    $sql = "UPDATE ibituruna.livros SET titulo = :titulo, autor = :autor, editora = :editora, ano = :ano WHERE id= :id";
    
    $result = $pdo->prepare($sql);
    $result->bindValue(':titulo', $titulo);
    $result->bindValue(':autor', $autor);
    $result->bindValue(':editora', $editora);
    $result->bindValue(':ano', $ano);
    $result->bindValue(':id', $id);
    $count = $result->execute();
    echo "Atualizado <h3 style= 'color: white;'>" . $data_hoje . '-' . $hora_Atual ."</h3>";
    
?>