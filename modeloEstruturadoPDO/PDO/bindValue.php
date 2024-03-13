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
     //Variáveis via POST ou GET 
     $tarefa = $_POST['tarefa'];
     $data_tarefa = $_POST['data'];
     $hora_tarefa = $_POST['hora'];
     $raAluno = $_POST['cod'];
     //utilização do método prepare
     $prepare = $conn->prepare("INSERT INTO tarefas (descricao, data, hora, raAluno) VALUES (:tarefa, :data_tarefa, :hora_tarefa, :raAluno)");
     //bindparam("campo", $variável, Tipo_da_Variavel); - PDO::PARAM_STR para STRINGS;
     $prepare->bindValue(":tarefa", $tarefa, PDO::PARAM_STR);
     $prepare->bindValue(":data_tarefa", $data_tarefa, PDO::PARAM_STR);
     $prepare->bindValue(":hora_tarefa", $hora_tarefa, PDO::PARAM_STR);
     $prepare->bindValue(":raAluno", $raAluno, PDO::PARAM_STR);
     $count = $prepare->execute();
     //Fechando Conexão
     echo "<br> {$count} Linhas Foram Inseridas <br>";
    // $conn = null;

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