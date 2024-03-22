<?php

//Rafael Márcio Vilas Boas
//Ano: 2024
//Semac - lavras
//PHP DATA OBJECT - PDO - Consulte sempre o Manual Oficial do PHP

$servidor = "172.16.54.174: 3310";
$banco = "agendatelefonica";
$usuario = "root";
$senha = "";
$comprados = "";


//Tratamento de Erro (Exception)
try {
    //A Conexao
    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
    //Tratamento de Erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM contatos WHERE raAluno = 2806 ORDER BY nome ASC";

    //utilização do método query do objeto $conn tipo PDO
    $result = $conn->query($sql);

    //Fechando a Conexão
    $conn = null;

    if ($result) {

        while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {

            $id = $linha['id'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $celular = $linha['celular'];
            $zap = $linha['zap'];

            if($zap == 1){
            $comprados .= "<tr> <td>" . $id . "</td><td>" . $nome . "</td><td>" . $email . "</td><td>" . $celular . "</td><td><i style='font-size: 30px; color: green;' class='bi bi-whatsapp'></i></td><td><button style='background-color: red; border-radius: 10px;' onclick='removerElemento(" . $linha["id"] . ")'>Excluir</button></td><td><button style='background-color: green; border-radius: 10px;' onclick='atualizarElemento({$linha["id"]},{$linha["nome"]},{$linha["email"]},{$linha["celular"]},{$linha["zap"]})'>Editar</button></td></tr>";
            }else{
                $comprados .= "<tr> <td>" . $id . "</td><td>" . $nome . "</td><td>" . $email . "</td><td>" . $celular . "</td><td><i style='font-size: 30px; color: rgb(0, 81, 255);' class='bi bi-telephone-fill'></i></td><td><button style='background-color: red; border-radius: 10px;' onclick='removerElemento(" . $linha["id"] . ")'>Excluir</button></td><td><button style='background-color: green; border-radius: 10px;' id='edit'>Editar</button></td></tr>";
        
            }

        }
        echo $comprados;
    } else {
        echo "Erro";
    }
} catch (PDOException $err) {
    echo $err->getMessage();
    $conn = null;
    echo "Deu Errado";
}
