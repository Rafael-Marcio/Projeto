<?php

class Banco{

  //Método que retorna um Array com a Resposta do SQL passado

    public function pegarDados($sql){

        require_once("conexao.php");
        $queryLivros = $conexao->query($sql);
        $res = $queryLivros->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    }
}