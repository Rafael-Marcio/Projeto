<?php
    $sql = "SELECT COUNT(*) FROM livros ";
    require_once("conexaoMyuSql.php");
    $queryLivros = $pdo->query($sql);
    $res = $queryLivros->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);
?>