<?php 

    //Variáveis Globais
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $data_hoje = utf8_encode(strftime('%A, %d de %B de %Y ', strtotime('today')));
    $hora_atual = date('H:i:s');
    $dataAgora = date('d/m/Y');
    //echo $data_hoje;
    //echo $hora_atual;

    $nome_sistema = 'Gosme Systems';
    $email_sistema = 'edutoroze@gmail.com';
    $telfone_sistema = '(44) 99928-8066';
    $url_sistema = 'http://localhost/EsteticaProdutos/';