<?php
require_once './classes/utils/Utils.php';
require_once './classes/Posts.php';
$hora = Utils::getDataHora();
echo "<br>" . $hora . "<br>"; 

try{
    Transaction::open();
    $dados = [
        ['id'=> '', 'post'=>'PHP1', 'data'=>'11/05/2024', 'hora'=>'11:00', 'like'=>1, 'deslike'=>0],
        ['id'=> '', 'post'=>'PHP teste', 'data'=>'11/05/2024', 'hora'=>'11:00', 'like'=>1, 'deslike'=>0],
        ['id'=> '', 'post'=>'PHP2', 'data'=>'11/05/2024', 'hora'=>'11:00', 'like'=>1, 'deslike'=>0],
        ['id'=> '', 'post'=>'PHP3', 'data'=>'11/05/2024', 'hora'=>'11:00', 'like'=>1, 'deslike'=>0],
        ['id'=> '', 'post'=>'PHP4', 'data'=>'11/05/2024', 'hora'=>'11:00', 'like'=>1, 'deslike'=>0],
    ];
    for($i=0;$i<count($dados);$i++){
        $post = new Posts();
        //Pegar o próximo id depois de ter adicionado o id do primeiro ele já no próximo post alterara para o próximo id
        $dados[$i]['id'] = $post->NEXTid();
        $post->insert($dados[$i]);
    }

    Transaction::close();

}catch (Exception $error){
    Transaction::rollback();
    echo "<pre>";
    print_r($error);
}
