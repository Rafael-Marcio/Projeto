<?php

require_once('./conexao.php');
session_start();

$id = $_GET['id'];
$qtd = $_GET['qtd'];
$data = $_GET['data'];
$qtd = $qtd - 1;
$idUser = $_SESSION['idUser'];

$addProduto = $conexao->prepare("UPDATE produtos SET produtoQtd = :qtd WHERE idprodutos = :id");
$addProduto->bindValue(':qtd', $qtd);
$addProduto->bindValue(':id', $id);
$add = $addProduto->execute();

$addbaixa = $conexao->prepare("INSERT INTO saida (idproduto, iduser, data, quantidade) VALUES (:idproduto, :iduser, :data, :quantidade)");
$addbaixa->bindValue(':idproduto', $id);
$addbaixa->bindValue(':iduser', $idUser);
$addbaixa->bindValue(':data', $data);
$addbaixa->bindValue(':quantidade', 1);
$baixa = $addbaixa->execute();

header('Location: ../principal.php');