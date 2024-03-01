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

    $id = $_GET['id'];
    
    $sql = "DELETE FROM agenda.tarefas WHERE id= $id";
    $result = $conn->query($sql);
    $result->execute();

    $conn = null;
    header('Location: ' . 'http://localhost/tarefas/scripts/' . 'listar.php');

} catch (Exception $e){
    echo '<script>console.log(' . $e . ')</script>';
}