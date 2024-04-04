<?php

require_once('./conexao.php');

$id = $_GET['id'];

$deletar = $conexao->prepare("DELETE FROM estoque.produtos WHERE idprodutos= :id");
$deletar->bindValue(':id', $id);
$count = $deletar->execute();
echo $count;

header('Location: ../principal.php');