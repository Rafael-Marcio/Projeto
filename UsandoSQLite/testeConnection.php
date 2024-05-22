<?php
require_once './classes/api/Connection.php';
try{
    $conn = Connection::open();
    echo "Conectado com Sucesso!";
}catch (Exception $error){
    echo "<pre>";
    print_r($error);
}