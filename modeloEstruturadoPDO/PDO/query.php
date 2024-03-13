<?php

//Rafael Márcio Vilas Boas
//Ano: 2024
//Semac - lavras
//PHP DATA OBJECT - PDO - Consulte sempre o Manual Oficial do PHP

$servidor = "172.16.54.174: 3310";
$banco = "agenda";
$usuario = "root";
$senha = "";


//Tratamento de Erro (Exception)
try{
    //A Conexao
    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8",$usuario,$senha);
    //Tratamento de Erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tarefas";

    //utilização do método query do objeto $conn tipo PDO
    $result = $conn->query($sql);

    //Fechando a Conexão
    $conn = null;

    if($result){
        $linha = $result->fetch(PDO::FETCH_ASSOC);
        while($linha){
            echo $linha['id'] . " - " . $linha['descricao'] . " - " . $linha['data'] . " - " . $linha['hora'] . "<hr>";
            $linha = $result->fetch(PDO::FETCH_ASSOC);
        }
    }else{
        echo "Erro";
    }
}catch(PDOException $err){
    echo $err->getMessage();
    $conn = null;
    echo "Deu Errado";
}
?>