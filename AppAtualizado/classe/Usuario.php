<?php

require_once("./classe/api/Transaction.php");
require_once("./classe/Utils.php");
class Usuario
{
    private $header, $content, $navbar;
    public function __construct()
    {

        //carregando os componentes da Tela 
        $this->header = file_get_contents("./html/Componentes/header.html");
        $this->navbar = file_get_contents("./html/Componentes/navbar.html");
        $this->content = file_get_contents("./html/pages/cadastro.html");
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
    public static function cadastrar()
    {
        //a Fazer....

    }
    public function show()
    {
        //vazio sem retorno para mostrar

        $pagina = file_get_contents("./html/home.html");
        $pagina = str_replace('{header}',  $this->header, $pagina);
        $pagina = str_replace('{navbar}',  $this->navbar, $pagina);
        $pagina = str_replace('{content}',   $this->content, $pagina);
        $pagina = str_replace('{usuario}', $_SESSION['usuario'], $pagina);

        echo $pagina;
    }
}
