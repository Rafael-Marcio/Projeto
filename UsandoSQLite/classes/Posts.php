<?php
require_once './classes/api/Connection.php';
require_once './classes/api/Transaction.php';
class Posts
{

    private $html;
    private $dados;
    private $items;
    public function __construct()
    {
        //vazio
        $this->html = file_get_contents("./html/index.html");
    }
    public function all(){

        try{
            $registros = '';
            $sql = "SELECT * FROM posts LIMIT 10";
            $conn = Transaction::getConnection();
            $result = $conn->prepare($sql);
            $result->execute();
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);

            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($dados as $row){
                $registros .= $row['posts'] . " - " . $row['data'] . " - " . $row['hora'] . '<br>';
            }
            return $dados;
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }
    public function insert($params)
    {
        try{
            $sql = "INSERT INTO posts (id,posts,data,hora,like,deslike) VALUES ({$params['id']},'{$params['post']}', '{$params['data']}', '{$params['hora']}', {$params['like']}, {$params['deslike']})";
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);
            // echo "O Logger foi realizado com sucesso no TXT";
            $conn = Transaction::getConnection();
            $count = $conn->exec($sql);
            return $count;
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }
    public function update($params)
    {
        try{
            $sql = "UPDATE posts SET posts = '{$params['post']}', data = '{$params['data']}', hora = '{$params['hora']}', like = {$params['like']}, deslike = {$params['deslike']} WHERE id = {$params['id']}";
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);

            $conn = Transaction::getConnection();
            $count = $conn->exec($sql);
            return $count;
            
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }
    public function delete($params)
    {
        try{
            $sql = "DELETE FROM posts WHERE id = {$params['id']}";
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);

            $conn = Transaction::getConnection();
            $count = $conn->exec($sql);
            return $count;
            
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }
    public function NEXTid(){
        try{
            $sql = "SELECT max(id) as next FROM posts";
            //criando um log de ações no Banco de Dados com RA
            $RA = "Rafael";
            Utils::log($sql, $RA);

            $conn = Transaction::getConnection();
            $count = $conn->query($sql);
            $linha = $count->fetch(PDO::FETCH_ASSOC);
            $next = (int) $linha['next'] + 1;
            return $next;
            
        }catch (Exception $error){
            print_r($error);
            exit;
        }
    }
    
    public function listar()
    {
        //usando a classe criada em PDF anterior
        //retorna um vetor e que passsa para os dados

        try{
            Transaction::open();
            $this->dados = Posts::all();
            Transaction::close();
            foreach ($this->dados as $postagem) {

                $item =  file_get_contents("./html/Componentes/rowTable.html");
                $item = str_replace('{id}', $postagem['id'], $item);
                $item = str_replace('{post}', $postagem['posts'], $item);
                $item = str_replace('{data}', $postagem['data'], $item);
                $item = str_replace('{hora}', $postagem['hora'], $item);
                $item = str_replace('{likePost}', $postagem['like'], $item);
                $item = str_replace('{DesLike}', $postagem['deslike'], $item);
                $this->items .= $item;
            }
        } catch (Exception $error) {
          echo "<pre>";
          print_r($error);
          exit();
        }
    }
 
    public function show()
    {
        //mostra formulário na tela
        //carregando os componentes
        $header = file_get_contents("./html/Componentes/header.html");
        $footer = file_get_contents("./html/Componentes/footer.html");
        //Trocando a marcação no HTML
        $this->html = str_replace('{header}', $header, $this->html);
        $this->html = str_replace('{footer}', $footer, $this->html);
        //variaveis de marcação
        $this->html = str_replace('{registros}', $this->items, $this->html);
        print $this->html;
 
    }
}