<?php

$servidor = '172.16.54.174:3310';
$banco = 'agenda';
$usuario = 'root';
$senha = '';

//

try{
    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "SELECT FROM agenda.tarefas";
    $result = $conn->query($sql);
    echo $result;


} catch (Exception $e){
    echo '<script>console.log("erro")</script>';
}