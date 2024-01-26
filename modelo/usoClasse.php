
<?php
        //incluindo a classe banco com seus Métodos
        require_once('../PDO/ClasseLivros.php');
        $tempPDO = new Livros();
        $result = $tempPDO->InsertPrepare("Maromba Volume 2", "2024", "SENAC");
        //$linhas = @count($result);
        echo "<hr> $result[0] <hr> $result[1] <hr>";
        
        require_once("biblioteca.php");
        echo $data_hoje . "<br>";
        echo $hora_Atual;
        
?>

