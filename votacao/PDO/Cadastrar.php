<?php
    require_once("conexao.php");
    require_once("../Biblioteca/biblioteca.php");
    $nome = $_POST['nome'];
    $user = $_POST['user'];
    $celular = $_POST['celular'];
    $competicao = $_POST['competicao'];
    $nivel = $_POST['nivel'];
    $senha = $_POST['senha'];
    $senhaCripto = md5($senha);

    $result = $pdo->prepare("INSERT INTO competicao.users (Nome,email,celular,competicao,TipoUser,senha,senhaCripto) VALUES (:nome, :celular, :competicao, :nivel, :users, :senha, :senhaCripto)");
    $result->bindValue(':nome', "$nome");
    $result->bindValue(':users', "$user");
    $result->bindValue(':celular', "$celular");
    $result->bindValue(':competicao', "$competicao");
    $result->bindValue(':nivel', "$nivel");
    $result->bindValue(':senha', "$senha");
    $result->bindValue(':senhaCripto', "$senhaCripto");
    $count = $result->execute();
    echo "Registro Adicionado.";
?>