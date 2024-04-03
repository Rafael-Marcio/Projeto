<?php
require_once('./conexao.php');

$nome = $_POST['nome'];
$qntd = $_POST['qntd'];
$dateVal = $_POST['dateVal'];
$lote = $_POST['lote'];

$sql = "INSERT INTO estoque.produto (Nome, Qntd, Validade, Lote) VALUES (:nome, :qntd, :validade, :lote)";
$addProduto = $conexao->prepare($sql);
$addProduto->bindValue(':nome', $nome);
$addProduto->bindValue(':qntd', $qntd);
$addProduto->bindValue(':validade', $dateVal);
$addProduto->bindValue(':lote', $lote);

$add = $addProduto->execute();

echo $add;