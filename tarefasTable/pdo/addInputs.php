<?php 
//abrindo a conexão com o banco de dados 
//criando as variaveis com os dados para entrar no banco de dados
//PDO::errorCode - Retorna apenas o codigo do erro SQLSTATE
//PDO::errorInfo - Retorna um array com informações do erro
//(codigo do erro, mensagem de erro, codigo do erro)

$server = "172.16.54.174:3310";
$bank = "agenda";
$user = "root";
$passWord = "";
$saida = "";
 //tratamento de erro com try
 try{

    //crianco o objeto pdo para abrir a conexão
    $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8",$user,$passWord);
    //tratamento de erros
    $id = $_POST['idTarefa'];
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res = $con->query("SELECT * FROM tarefas WHERE id = {$id}");
    if($res){
        $linha = $res->fetch(PDO::FETCH_ASSOC);
        $con = null;
    }
    else{
        echo "erro";
    }
    echo json_encode($linha);
}catch(PDOException $err){
    $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8",$user,$passWord);
    // echo "Codigo do erro foi: " . $con->errorCode() . "<br>";
    // print_r($con->errorInfo());
    // echo "<br>";
    //outra forma de mostrar o erro
    // echo $con->errorInfo()[0] . "<br>";
    // echo $con->errorInfo()[1] . "<br>";
    // echo $con->errorInfo()[2] . "<br>";
    echo "As informações do erro foram: " . $con->errorInfo() . "<br>";
    echo $err->getMessage();
    $con = null;
 }
?>