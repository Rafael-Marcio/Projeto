<?php
require_once("PDO/conexao.php");
session_start();
$url_sistema = 'http://localhost/LoginPHP/';
//Pegandoas informações com POST via ACTION
if(isset($_POST['email'])){
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    
}
else{

    header('Location:' . $url_sistema . 'login.php');
    exit;
}
//Mostrando na tela as informações coletadas pelo POST
$sql = "SELECT * FROM ibituruna.usuario WHERE email = :email and senha = :senha";
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
        
        header('Location:' . $url_sistema . 'Logar.php');
}else{
    echo "não encontrou....";
   // header('Location:' . $url_sistema . 'Logar.php');

}


