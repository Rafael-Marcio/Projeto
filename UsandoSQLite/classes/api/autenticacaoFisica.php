<?php
session_start();
$username = 'rafael'; //seu nome de usuario
$password = '123'; //sua senhar
$dados = $_POST;
//print_r($dados);
//pegando os dados
$usernamePost = isset($dados['user']) ? trim($dados['user']) : null;
$passwordPost = isset($dados['password']) ? trim($dados['passowrd']) : null;
//echo ($usernamePost . " - " . $passwordPost);
//exit;
 
if(isset($_SESSION['usuario'])){
    session_destroy();
    echo "Instruso";
} else {
    //autenticando
 
    if($username === $usernamePost && $password === $passwordPost){
 
        $_SESSION['usuario'] = "rafaelmvb682@gmail.com";
        echo "Autenticado";
    }else{
        session_destroy();
        echo "Intruso tentando logar";
    }
}
?>