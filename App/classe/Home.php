<?php

class Home
{

    private $registros = '';
    public function __construct()
    {
        //vazio
        $this->html = file_get_contents("./html/home.html");
    }
    public  function show()
    {

        try {
            // Lê o conteúdo de um arquivo chamado "exemplo.txt" para uma string
            //mostra formulário na tela
        //carregando os componentes
        $header = file_get_contents("./html/Componentes/header.html");
        $footer = file_get_contents("./html/Componentes/footer.html");
        //Trocando a marcação no HTML
        $this->html = str_replace('{header}', $header, $this->html);
        $this->html = str_replace('{footer}', $footer, $this->html);
        $this->html = str_replace('{usuario}', $_SESSION['usuario'], $this->html);
        //variaveis de marcação
        $this->html = str_replace('{registros}', '<img src="https://image.portaldacidade.com/unsafe/https://bucket.portaldacidade.com/guaxupe.portaldacidade.com/img/news/2024-04/senac-mg-realiza-programa-de-inclusao-profissional-para-pessoas-com-deficiencia-661ff9b263cda.jpeg" alt="">', $this->html);
        print $this->html;
        } catch (Exception $error) {
            print_r($error);
            exit;
        }
    }
}
