<?php

class Index{
    private $html;
    public function __construct()
    {

    } 
    public function show()
    {
        //mostra formulário na tela
        //carregando os componentes
        //Trocando a marcação no HTML
        $this->html = file_get_contents("./html/login.html");
        print $this->html;
 
    }
}