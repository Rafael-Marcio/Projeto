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
$banco = "agendatelefonica";
$usuario = "root";
$senha = "";


//Tratamento de Erro (Exception)
try{
    //A Conexao
    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8",$usuario,$senha);
    //Tratamento de Erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //Variáveis via POST ou GET 
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $tel = $_POST['tel'];
     $zap = $_POST['whatsapp'];
     $raAluno = "2806";
     //utilização do método prepare
     $prepare = $conn->prepare("INSERT INTO contatos (nome, email, celular, zap, raAluno) VALUES (:nome, :email, :celular, :zap, :raAluno)");
     //bindparam("campo", $variável, Tipo_da_Variavel); - PDO::PARAM_STR para STRINGS;
     $prepare->bindValue(":nome", $nome, PDO::PARAM_STR);
     $prepare->bindValue(":email", $email, PDO::PARAM_STR);
     $prepare->bindValue(":celular", $tel, PDO::PARAM_STR);
     $prepare->bindValue(":zap", $zap, PDO::PARAM_STR);
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