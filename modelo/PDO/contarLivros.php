<?php
    require_once("conexao.php");
    $quantidadeLivros = $pdo->query("SELECT * FROM ibituruna.livros");
    $res = $quantidadeLivros->fetchAll(PDO::FETCH_ASSOC);
    $qtd = @count($res);
    echo '<h1>' . $qtd .'</h1>';
?>