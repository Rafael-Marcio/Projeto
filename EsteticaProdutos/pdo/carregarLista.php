<?php

require_once('./conexao.php');
session_start();

$table = '';

$carregar = $conexao->query("SELECT * FROM produtos WHERE produtosCurso = " . $_SESSION['Curso']);

if ($carregar) {

    while ($linha = $carregar->fetch(PDO::FETCH_ASSOC)) {

        $id = $linha['idprodutos'];
        $nome = $linha['produtoDescri'];
        $qntd = $linha['produtoQtd'];

    $table .= "<tr><td>" . $nome . "</td><td style=' width: 50px;'>" . $qntd . "</td><td><button style='background-color: red; border-radius: 10px; margin-left: 20px;' onclick='removerElemento(" . $linha["idprodutos"] . ")'>Excluir</button></td><td><button style='background-color: green; border-radius: 10px;' onclick='atualizarElemento(\"{$linha["idprodutos"]}\",\"{$linha["produtoDescri"]}\",\"{$linha["produtoQtd"]}\",\"{$linha["produtoValidade"]}\",\"{$linha["produtoLote"]}\")'>Visualizar</button></td><td style=' width: 30px;'><button style='width: 30px; font-size: 20px; font-weight: bold; background-color: #7FFF00;' onclick='AddProduto(\"{$linha["idprodutos"]}\",\"{$linha["produtoQtd"]}\")'>+</button></td><td style=' width: 30px;'><button style='width: 30px; font-size: 20px; font-weight: bold; background-color: #B22222;' onclick='subProduto(\"{$linha["idprodutos"]}\",\"{$linha["produtoQtd"]}\")'>-</button></td></tr>";

        

    }
    echo $table;
} else {
    echo "Erro";
}