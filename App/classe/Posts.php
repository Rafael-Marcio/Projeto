<?php
require_once './classe/api/Connection.php';
require_once './classe/api/Transaction.php';
require_once './classe/utils/Utils.php';
class Posts
{

    private $registros = '';
    private $html = '';
    public function __construct()
    {
        //vazio
        $this->html = file_get_contents("./html/home.html");
    }

    public static function find($params)	
	{	
        try {
            $id = $_GET['id'];

            $conn = Transaction::getConnection();
            $sql = "SELECT post FROM posts WHERE id = {$id}";
            //utilizaçao do método QUERY do objeto $conn tipo PDO
            $result = $conn->query($sql);
            $linha = $result->fetch(PDO::FETCH_ASSOC);  
            $string = $linha['post'];

            //FECHANDO A Conexão
            echo $string;

        } catch (Exception $error) {	
            echo "<pre>";
            print_r($error);
            exit();
        }	
    }	

    public  function all()
    {

        try {
            $sql = "SELECT * FROM posts LIMIT 10";
            $conn = Transaction::getConnection();
            $result = $conn->prepare($sql);
            $result->execute();
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);
            //echo "O logger foi realizado com sucesso no TXT.";
            //echo "<pre>";
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $row) {
                $this->registros .= $row['post'] . " - " . $row['data'] . " - " .  $row['hora'] . '<br>';
            }
            return $dados;
        } catch (Exception $error) {
            print_r($error);
            exit;
        }
    }
    public  function insert($params)
    {
        try{
            $sql = "INSERT INTO  posts (post,data,hora,likes) VALUES  ('{$params['postagem']}','{$params['data']}','{$params['hora']}','0')";

            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);
            echo "O logger foi realizado com sucesso no TXT.";
            //Qual Conexao está aberta?                        
            $conn = Transaction::getConnection();
            //inicia a Transação
            $conn->exec($sql);
            echo "Adicionado";
            Transaction::close();
        } catch (Exception $error) {
            echo "<pre>";
            print_r($error);
        }
    }


    public function update($params)
    {
        try{
            
            $id = $_GET['id'];
            $sql = "UPDATE posts SET post = '{$params['editarpostagem']}' WHERE id = {$id}";
            //criando um log de ações no Banco de Dados com RA
            
            $RA = "Rafael";
            Utils::log($sql, $RA);

            $conn = Transaction::getConnection();
            $count = $conn->exec($sql);
            
            Transaction::close();
            echo "Editado";
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }


    public function delete($params)
    {
        try{

            $id = $_GET['id'];
            $sql = "DELETE FROM posts WHERE id = {$id}";
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);

            $conn = Transaction::getConnection();
            $count = $conn->exec($sql);

            Transaction::close();
            
            echo "Deletado";
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }

 
    public function show()
    {
        Transaction::open();
        $this->dados = Posts::all();
        Transaction::close();
        foreach ($this->dados as $postagem) {

            $item =  file_get_contents("./html/Componentes/rowTable.html");
            $item = str_replace('{id}', $postagem['id'], $item);
            $item = str_replace('{post}', $postagem['post'], $item);
            $item = str_replace('{data}', $postagem['data'], $item);
            $item = str_replace('{hora}', $postagem['hora'], $item);
            $item = str_replace('{likePost}', $postagem['likes'], $item);
            $this->items .= $item;
        }
        
        //mostra formulário na tela
        //carregando os componentes
        $header = file_get_contents("./html/Componentes/header.html");
        $footer = file_get_contents("./html/Componentes/footer.html");
        //Trocando a marcação no HTML
        $this->html = str_replace('{header}', $header, $this->html);
        $this->html = str_replace('{footer}', $footer, $this->html);
        $this->html = str_replace('{usuario}', $_SESSION['usuario'], $this->html);
        //variaveis de marcação
        $this->html = str_replace('{registros}', $this->items, $this->html);
        print $this->html;
 
    }
}