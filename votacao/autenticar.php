<?php
require_once("PDO/conexao.php");
session_start();
$url_sistema = 'http://localhost/votacao/';
//Pegandoas informações com POST via ACTION
if(isset($_POST['user'])){

    $email = trim($_POST['user']);
    $senha = trim($_POST['senha']);
    
}
else{
    
    header('Location:' . $url_sistema . 'Login.php');
    echo $_POST['senha'];

    exit;
}
//Mostrando na tela as informações coletadas pelo POST
$sql = "SELECT * FROM competicao.users WHERE email = :email and senha = :senha";
$result = $pdo->prepare($sql);    
$result->bindValue(':email', "$email");
$result->bindValue(':senha', "$senha");
$count = $result->execute();
$count = $result->fetchAll(PDO::FETCH_ASSOC);
$qtd = @count($count);
var_dump($result);
// Redirecionando a página com php
var_dump($qtd);
if($qtd > 0 ){

        $_SESSION['email'] = $count[0]['email'];
        $_SESSION['nome'] = $count[0]['nome'];
        $_SESSION['celular'] = $count[0]['celular'];
        $_SESSION['nivel'] = $count[0]['TipoUser'];
        
        header('Location:' . $url_sistema . 'Logado.php');
}else{
    echo "não encontrou....";
    header('Location:' . $url_sistema . 'Login.php');

}


