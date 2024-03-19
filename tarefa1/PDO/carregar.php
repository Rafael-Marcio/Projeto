<?php

//Rafael Márcio Vilas Boas
//Ano: 2024
//Semac - lavras
//PHP DATA OBJECT - PDO - Consulte sempre o Manual Oficial do PHP

$servidor = "172.16.54.174: 3310";
$banco = "listacompra";
$usuario = "root";
$senha = "";
$comprados = "";
$compras = "";


//Tratamento de Erro (Exception)
try {
    //A Conexao
    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
    //Tratamento de Erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM produtos WHERE raAluno = 968840";

    //utilização do método query do objeto $conn tipo PDO
    $result = $conn->query($sql);

    //Fechando a Conexão
    $conn = null;

    if ($result) {

        while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {

            $id = $linha['id'];
            $produto = $linha['produto'];
            $quantidade = $linha['quantidade'];
            $marca = $linha['marca'];
            $comprado = $linha['comprado'];

            if($comprado == 1){
                $compras .= "<tr style='text-decoration: line-through;'> <td>" . $id . "</td><td>" . $produto . "</td><td>" . $quantidade . "</td><td>" . $marca . "</td><td style='border: transparent;'><button style='background-color: red;' onclick='removerElemento(" . $linha["id"] . ")'>Excluir</button></td><td style='border: transparent;'><button style='background-color: yellow;' onclick='atualizarElemento(" . $linha["id"] . ")'>Editar</button></td><td style='border: transparent;'><button style='background-color: brown;' onclick='Descomprar( " . $linha["id"] . ")'>Comprado</button></td></tr>";;
            }else{
                $comprados .= "<tr> <td>" . $id . "</td><td>" . $produto . "</td><td>" . $quantidade . "</td><td>" . $marca . "</td><td style='border: transparent;'><button style='background-color: red;' onclick='removerElemento(" . $linha["id"] . ")'>Excluir</button></td><td style='border: transparent;'><button style='background-color: yellow;' onclick='atualizarElemento(" . $linha["id"] . ")'>Editar</button></td><td style='border: transparent;'><button style='background-color: greenyellow;' onclick='Comprado(" . $linha["id"] . ")'>Comprar</button></td></tr>";
        
            }

        }
        echo $comprados;
        echo $compras;
    } else {
        echo "Erro";
    }
} catch (PDOException $err) {
    echo $err->getMessage();
    $conn = null;
    echo "Deu Errado";
}
