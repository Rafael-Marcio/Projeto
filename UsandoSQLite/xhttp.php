<?php

require_once './classes/Posts.php';   //A classe POSTS não é estatic portanto temos que referenciar POSTS
Transaction::open();                  //chamada de método Estático (static)
$posts = new Posts();                 //inicia a Transação com o banco de dados posts (SQlite)
$meusRegistros = $posts->all();       //Executa o método a all da classe Posts (SQLite)
Transaction::close();                 //Finaliza a Transação com o banco de dados posts(SQLite)
//print_r($meusRegistros)             //retorna a resposta para a requisição em formato array
echo json_encode($meusRegistros);     //retorna a resposta para a requisição em formato json