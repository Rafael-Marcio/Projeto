<?php

//Rafael Márcio Vilas Boas
//Ano: 2024
//Semac - lavras
//PHP DATA OBJECT - PDO - Consulte sempre o Manual Oficial do PHP

//*
//PDO::errorCode - Retorna apenas o código do erro SQLSTATE
//PDO::errorInfo - Retorna um array com informações do erro
//(código do erro, mensagem do erro, código do erro)
//


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
    //informações da atualização
    $id = $_GET['id'];
    $tarefa = $_GET['tarefa'];
    $data_tarefa = $_GET['data'];
    $hora_tarefa = $_GET['hora'];


    //utilizando o metodo do prepare 
    $prepare = $conn->prepare("UPDATE agenda.tarefas SET descricao = :descricao, data = :data_tarefa, hora = :hora_tarefa WHERE id = :id");
     //bindparam("campo", $variável, Tipo_da_Variavel); - PDO::PARAM_STR para STRINGS;
     $prepare->bindValue(":descricao", $tarefa, PDO::PARAM_STR);
     $prepare->bindValue(":data_tarefa", $data_tarefa, PDO::PARAM_STR);
     $prepare->bindValue(":hora_tarefa", $hora_tarefa, PDO::PARAM_STR);
     $prepare->bindValue(":id", $id, PDO::PARAM_STR);

    $count = $prepare->execute();
    // $conn = null;
    echo $count . " Linha foi atualizada!";
    header('Location: ' . '../tarefas.php');

}catch(PDOException $error){

    echo "Código do erro foi: " . $conn->errorCode() . "<br>";
    print_r($conn->errorInfo());
    echo "<br>";

    //Outra forma de mostrar os erros
    echo $conn->errorInfo()[0] . "<br>";
    echo $conn->errorInfo()[1] . "<br>";
    echo $conn->errorInfo()[2] . "<br>";
    echo "As informsções do erro foi: " . $conn->errorInfo() . "<br>";
    echo $error->getMessage();
}
?>