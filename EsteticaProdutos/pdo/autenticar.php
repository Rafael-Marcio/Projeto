<?php
//Na Página de conexão iniciar a sessão com o comando abaixo:
 
@session_start();
require_once("biblioteca.php");
require_once("conexao.php");
 
//Pegando as informações com POST via ACTION
if (isset($_POST['email'])) {
 
    $email = trim($_POST['email']);
    $password = trim($_POST['senha']);
 
} else {
 
    header('location:' . $url_sistema);
    exit();
}
 
 
//Pegar o Usuário no Banco de Dados
$user = $conexao->prepare("SELECT * FROM estoque.user WHERE email = :email AND senha = :senha");
$user->bindValue(":email", $email);
$user->bindValue(":senha", $password);
$res= $user->execute();
$res = $user->fetchAll(PDO::FETCH_ASSOC);
$Nome = $res[0]["Nome"];
$passcripto = $res[0]["senhaCripto"];
$Curso = $res[0]["idcurso"];
$senhacriptografada = md5($password);
 
if($senhacriptografada == $passcripto){
 
    $_SESSION['email'] = $email;
    $_SESSION['Nome'] = $Nome;
    $_SESSION['Curso'] = $Curso;
//    header('Location:'. $url_sistema . 'principal.php');
    echo"Foi";
} else {
    //header('Location:'. $url_sistema . 'index.php');
    session_destroy();
    exit;
}