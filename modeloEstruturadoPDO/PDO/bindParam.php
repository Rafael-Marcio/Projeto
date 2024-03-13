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
    //Variáveis via POST ou GET 
    $tarefa = "Programar em JavaScript";
    $data_tarefa = "2024-04-12";
    $hora_tarefa = "19:00";
    //utilização do método prepare
    $prepare = $conn->prepare("INSERT INTO tarefas (descricao, data, hora) VALUES (:tarefa, :data_tarefa, :hora_tarefa)");
    //bindparam("campo", $variável, Tipo_da_Variavel); - PDO::PARAM_STR para STRINGS;
    $prepare->bindParam(":tarefa", $tarefa, PDO::PARAM_STR);
    $prepare->bindParam(":data_tarefa", $data_tarefa, PDO::PARAM_STR);
    $prepare->bindParam(":hora_tarefa", $hora_tarefa, PDO::PARAM_STR);
    $count = $prepare->execute();
    //Fechando Conexão
    $conn = null;

    echo "<br> {$count} Linhas Foram Inseridas <br>";
}catch(PDOException $err){
    echo $err->getMessage();
}
?>