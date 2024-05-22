<?php

require_once './Connection.php'; 
require_once './Transaction.php';

try{
    
    Transaction::open();
        $conn = Transaction::getConnection();
        if(isset($_POST['user'])){

            $email = trim($_POST['user']);
            $senha = trim($_POST['senha']);
            
        }
        else if(!isset($_POST['user'])){
            echo "Passei";
            header('Location: http://localhost/UsandoSQLite/login.php');
            exit;
        }
        
        session_start();
        //Pegandoas informações com POST via ACTION
        //Mostrando na tela as informações coletadas pelo POST
        $sql = "SELECT * FROM users WHERE email = :email and senha =  :senha";
        $result = $conn->prepare($sql);
        $result->bindValue(':email', $email, PDO::PARAM_STR);
        $result->bindValue(':senha', $senha, PDO::PARAM_STR);
        $resposta = $result->execute();
        //criando um log de ações no Banco de Dados com RA
        $RA = "Rafael";
        Utils::log($sql, $RA);
        
        $dados = $resposta->fetch(PDO::FETCH_ASSOC);
        $qtd = @count($dados);

        var_dump($result);
        // Redirecionando a página com php
        var_dump($qtd);
        
        if($qtd > 0 ){
                $_SESSION['email'] = $dados['email'];
                $_SESSION['nome'] = $dados['nome'];
                
                header('Location: ./index.php?class=Posts&method=listar');
        }else{
            echo "não encontrou....";
            header('Location: ./Login.php');

        }
    Transaction::close();
} catch (Exception $error) {
    Transaction::rollback();
    echo "<pre>";
    print_r($error);
}

