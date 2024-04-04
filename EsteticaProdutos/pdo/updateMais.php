<?php

require_once('./conexao.php');

session_start();

$id = $_GET['id'];
$qtd = $_GET['qtd'];
$data = $_GET['data'];
$qtd = $qtd + 1;
$idUser = $_SESSION['idUser'];

$addProduto = $conexao->prepare("UPDATE produtos SET produtoQtd = :qtd WHERE idprodutos = :id");
$addProduto->bindValue(':qtd', $qtd);
$addProduto->bindValue(':id', $id);
$add = $addProduto->execute();

$addEntrada = $conexao->prepare("INSERT INTO entrada (iduser, idproduto, data, quantidade) VALUES (:iduser, :idproduto, :data, :quantidade)");
$addEntrada->bindValue(':iduser', $idUser);
$addEntrada->bindValue(':idproduto', $id);
$addEntrada->bindValue(':data', $data);
$addEntrada->bindValue(':quantidade', 1);
$entrada = $addEntrada->execute();

header('Location: ../principal.php');