<?php

require_once('./conexao.php');

$table = '';

$carregar = $conexao->query("SELECT * FROM produto");

if ($carregar) {

    while ($linha = $carregar->fetch(PDO::FETCH_ASSOC)) {

        $nome = $linha['Nome'];
        $qntd = $linha['Qntd'];

        
        $table .= "<tr><td>" . $nome . "</td><td>" . $qntd . "</td><td><button style='background-color: red; border-radius: 10px; margin-left: 20px;' onclick='removerElemento(" . $linha["Nome"] . ")'>Excluir</button></td><td><button style='background-color: green; border-radius: 10px;' onclick='atualizarElemento(\"{$linha["Nome"]}\")'>Visualizar</button></td></tr>";

        

    }
    echo $table;
} else {
    echo "Erro";
}