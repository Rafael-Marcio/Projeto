<?php
require_once './classe/api/Connection.php';
require_once './classe/api/Transaction.php';
require_once './classe/Utils.php';
class Posts
{

    private $registros = '';
    public function __construct()
    {
        //vazio

    }
    public  function all()
    {

        try {
            $sql = "SELECT * FROM posts LIMIT 20";
            $conn = Transaction::getConnection();
            $result = $conn->prepare($sql);
            $result->execute();
            //criando um log de ações no Banco de Dados com RA
            $RA = "Cosme";
            Utils::log($sql, $RA);
            //echo "O logger foi realizado com sucesso no TXT.";
            //echo "<pre>";
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        } catch (Exception $error) {
            print_r($error);
            exit;
        }
    }

    public  function insert($params)
    {
        $dataBrasil = Utils::converterDataParaBrasileiro($params['data']);
        $sql = "INSERT INTO  posts (post,data,hora)
                                 VALUES  ('{$params['post']}',
                                          '{$dataBrasil}',
                                          '{$params['hora']}'
                                          )";

        //criando um log de ações no Banco de Dados com RA
        $RA = $_SESSION['usuario'];
        Utils::log($sql, $RA);

        //Qual Conexao está aberta?                        
        $conn = Transaction::getConnection();
        //inicia a Transação
        $conn->exec($sql);
        Transaction::close();
        print "Sucesso_Salvou_Post";
    }
    public  function delete()
    {

        // Verifica se o parâmetro 'parametro' foi enviado pela URL
        if (isset($_GET['id'])) {
            // Pega o valor do parâmetro 'parametro'
            $valorParametro = $_GET['id'];

            // Faça o que você precisa com o valor do parâmetro
            echo "O id recebido é: " . $valorParametro;
        } else {
            // Se o parâmetro não foi enviado, você pode lidar com isso de alguma forma
            echo "O id não foi enviado na URL.";
        }
    }
    public function show()
    {

        //caso necessário usar


    }
}
