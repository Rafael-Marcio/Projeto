<?php
    //Pega a data Atual
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $data_hoje = utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today')));
    $hora_Atual = date("H:i:s");
    echo $data_hoje;
    echo $hora_Atual;

    $nome_sistema = 'Biblioteca';
    $email_sistema = 'rafaelmvb@gmail.com';
    $telefone_sistema = '(35) 992356302';
    $url_sistema = '';
?>