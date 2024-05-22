<?php

class Home
{

    private $header, $navbar, $posts, $rowTable, $Table, $rows, $formPost;
    public function __construct()
    {
        //carregando os componentes da Tela 
        $this->header = file_get_contents("./html/Componentes/header.html");
        $this->navbar = file_get_contents("./html/Componentes/navbar.html");
        $this->formPost = file_get_contents("./html/forms/form_Post.html");
        $this->Table = file_get_contents("./html/Componentes/tabelaPadrao.html");
        $this->montaTabela();
    }
    public function montaTabela()
    {
        //instancio o Objeto 
        $postsResult = new Posts();
        //aplico o método All da classe POSTS.php
        $this->posts = $postsResult->all();
        //pegando os posts individualmente
        //$this->posts = $this->posts[0]['post'];
        $i = 1;
        foreach ($this->posts as $row) {

            $this->rowTable = file_get_contents("./html/Componentes/rowTable.html");
            $this->rowTable = str_replace('{id}',  $i++, $this->rowTable);
            $this->rowTable = str_replace('{post}',  $row['post'], $this->rowTable);
            $this->rowTable = str_replace('{data}',  $row['data'], $this->rowTable);
            $this->rowTable = str_replace('{hora}',  $row['hora'], $this->rowTable);
            $this->rows .=  $this->rowTable;
        }
        //montando a tabela 
        $this->Table = str_replace('{rows}',  $this->rows, $this->Table);
    }

    public  function show()
    {

        try {
            // Lê o conteúdo de um arquivo chamado "exemplo.txt" para uma string
            $pagina = file_get_contents("./pages/Home/base.html");
            $pagina = str_replace('{header}',  $this->header, $pagina);
            $pagina = str_replace('{navbar}',  $this->navbar, $pagina);
            $pagina = str_replace('{content}',   $this->Table, $pagina);
            $pagina = str_replace('{formPost}',   $this->formPost, $pagina);
            $pagina = str_replace('{usuario}', $_SESSION['usuario'], $pagina);
            echo $pagina;
        } catch (Exception $error) {
            print_r($error);
            exit;
        }
    }
}
