<?php
 
    class Livros{

        //Método que retorna um array com a resposta do sql passado
        public function BooksDelete($id){
            require_once("conexao.php");
            $queryDelete = $pdo->query("DELETE FROM ibituruna.livros WHERE id={$id}");
            return $queryDelete;
        }
        public function InsertBooks($titulo){
            require_once("conexao.php");
            $queryInsert = $pdo->query("INSERT INTO ibituruna.livros (`titulo`) VALUES ('$titulo')");
            $queryQuantidadeLivros = $pdo->query("SELECT * FROM ibituruna.livros");
            $res = $queryQuantidadeLivros->fetchAll(PDO::FETCH_ASSOC);
            $qtd = @count($res);
            $vetorResp = Array();
            $vetorResp[0] = $titulo;
            $vetorResp[1] = $qtd;
            return $vetorResp;
            
        }
        public function InsertPrepare($titulo, $ano, $editora){
            require_once("conexao.php");
            require_once('../Biblioteca/biblioteca.php');
            $result = $pdo->prepare("INSERT INTO ibituruna.livros (titulo,ano,editora) VALUES (:titulo, :ano, :editora)");
            $result->bindValue(':titulo', "$titulo");
            $result->bindValue(':ano', "$ano");
            $result->bindValue(':editora', "$editora");
            $count = $result->execute();
            $resposta = "Registro Adicionado em: <h3 style= 'color: white;'>" . $data_hoje . '-' . $hora_Atual ."</h3>";
            return $resposta;
            
        }
        public function UsoExec($id){
            require_once("conexao.php");
            $count = $pdo->exec("DELETE FROM ibituruna.livros WHERE id= " . $id);
            return $count . "Redistro(s) Deletado(s).";
        }
    }

?> 