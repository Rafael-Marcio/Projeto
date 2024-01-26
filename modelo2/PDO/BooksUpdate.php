<?php
    require_once("conexao.php");
    require_once('../Biblioteca/biblioteca.php');
    $id = $_POST['id'];
    $titulo = $_POST['livro'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];
    
    $sql = "UPDATE ibituruna.livros SET titulo = :titulo, autor = :autor, editora = :editora, ano = :ano WHERE id= :id";
    
    $result = $pdo->prepare($sql);
    $result->bindValue(':titulo', $titulo);
    $result->bindValue(':autor', $autor);
    $result->bindValue(':editora', $editora);
    $result->bindValue(':ano', $ano);
    $result->bindValue(':id', $id);
    $count = $result->execute();
    echo $count;
    echo " - Livro Atualizado com sucesso.";
    
?>