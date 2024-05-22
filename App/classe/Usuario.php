<?php

require_once("./classe/api/Transaction.php");
require_once("./classe/utils/Utils.php");
class Usuario
{
    public function __construct()
    {
        //vazio
    }

    public function autenticar()
    {
        try {

            //TUDO MAISCULO OU MINUSCULO NAS TABELAS DO USUARIO ? EIS A QUESTÃO? 
            $sql = "SELECT * FROM users WHERE nome = '" . strtolower($_POST['user']) . "'";
            $conn = Transaction::getConnection();
            $result = $conn->query($sql);
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            $qtd = count($dados);
            Transaction::close();
            if (!empty($_POST['user'] and $qtd > 0)) {

                if (strtolower($_POST['user']) == $dados[0]['nome']  and strtolower($_POST['password']) == $dados[0]['senha']) {
                    $_SESSION['usuario'] = $dados[0]['email'];
                    Utils::log("Autenticou", $dados[0]['email']);
                    echo "Autenticado";
                }
            } else {
                echo "Intruso Tentando Autenticar";
            }
        } catch (Exception $error) {

            print "<pre>";
            print_r($error);
            exit;
        }
    }
    public static function deslogar()
    {
        try {
            if ($_SESSION['usuario'] != "") {

                Utils::log("Deslogou ",  $_SESSION['usuario']);
                session_destroy();
                echo "Deslogado";
            }
        } catch (Exception $error) {


            print_r($error);
            exit;
        }
    }
    public static function cadastrar($params)
    {
        try{    
            $sql = "INSERT INTO  users (nome,email,senha) VALUES ('" . strtolower($params["nome"]) . "', '{$params["email"]}', '{$params["password"]}')";
            //criando um log de ações no Banco de Dados com RA
            $RA = "Senac";
            Utils::log($sql, $RA);
            //Qual Conexao está aberta?                        
            $conn = Transaction::getConnection();
            //inicia a Transação
            $res = $conn->prepare($sql);
            $result = $res->execute();
            Transaction::close();
            echo "Cadastrado";
            
        }catch (Exception $error) {

            echo "<pre>";
            print_r($error);
        }

    }

    public static function show()
    {
        //vazio sem retorno para mostrar
    }
}
