<?php

$servidor = '172.16.54.174:3310';
$banco = 'agenda';
$usuario = 'root';
$senha = '';

//

try{
    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Inserindo as informacoes

    $dadosPOST = $_POST;
    $dados =[
        'descricao' => $dadosPOST['tarefa'],
        'data' => $dadosPOST['data'],
        'hora' => $dadosPOST['hora'],
    ];

    $sql = "INSERT INTO agenda.tarefas (`descricao`,`data`,`hora`) VALUES (:descricao, :data, :hora)";
    $result = $conn->prepare($sql);
    $result->execute($dados);

    $conn = null;
    header('Location: ' . 'http://localhost/tarefas/');

} catch (Exception $e){
    echo '<script>console.log(' . $e . ')</script>';
}