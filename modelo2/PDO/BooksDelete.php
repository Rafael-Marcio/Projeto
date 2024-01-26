




<?php
    require_once("conexao.php");
    require_once("../Biblioteca/biblioteca.php");
    $id = $_POST['id'];
    
    $sql = "DELETE FROM ibituruna.livros WHERE id = :id";
    $result = $pdo->prepare($sql);
    $result->bindValue( ':id', $id);
    $count = $result->execute();
    echo $count . " Linha Deletada com sucesso.... ";
?>

