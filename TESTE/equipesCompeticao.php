<?php
require_once('conexao.php');

    

    if(isset($_POST['buscaComp'])){

      
        $sql = "SELECT * FROM competicao.competicao WHERE NomeCompeticao = " . $_POST['buscaComp'];
        $result = $pdo->query($sql);
        $res = $result->fetchAll(PDO::FETCH_ASSOC);
        $idComp = $res[0]['idCompeticao'];
        $sql2 = "SELECT * FROM competicao.equipes WHERE idCompeticao = " . $idComp;
        $result2 = $pdo->query($sql2);
        $res2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        $count = count($res2);
        for($i = 0; $i < $count; $i++){

            echo "<option value=" . $res2[$i]['idEquipes'] . "-" . $res2[$i]['NomeEquipe'] . '">' . $res2[$i]['idEquipes'] . ' - ' . $res2[$i]['NomeEquipe'] . "</option>";
        
        }
    
    }else{

        var_dump($_POST);


    }