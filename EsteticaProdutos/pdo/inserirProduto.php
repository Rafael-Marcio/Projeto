<?php
require_once('./conexao.php');
session_start();

$nome = $_POST['nome'];
$qntd = $_POST['qntd'];
$dateVal = $_POST['dateVal'];
$lote = $_POST['lote'];
$curso = $_SESSION['Curso'];

$sql = "INSERT INTO estoque.produtos (produtoDescri, produtoQtd, produtoValidade, produtoLote, produtosCurso) VALUES (:nome, :qntd, :validade, :lote, :curso)";
$addProduto = $conexao->prepare($sql);
$addProduto->bindValue(':nome', $nome);
$addProduto->bindValue(':qntd', $qntd);
$addProduto->bindValue(':validade', $dateVal);
$addProduto->bindValue(':lote', $lote);
$addProduto->bindValue(':curso', $curso);

$add = $addProduto->execute();

echo $add;
