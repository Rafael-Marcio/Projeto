<?php
    
    //Rafael Márcio Vilas Boas
    //Ano: 2024
    //Semac - lavras
    //PHP DATA OBJECT - PDO - Consulte sempre o Manual Oficial do PHP

    $servidor = "172.16.54.174: 3310";
    $banco = "agenda";
    $usuario = "root";
    $senha = "";


    //Tratamento de Erro (Exception)
    try {
        //A Conexao
        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        //Tratamento de Erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $ra = $_POST['cod'];

        

        $sql = "SELECT * FROM tarefas WHERE raAluno = :ra";

        //utilização do método query do objeto $conn tipo PDO
        $result = $conn->prepare($sql);
        $result->bindValue(':ra',$ra);
        $result->execute();

        //Fechando a Conexão
        $conn = null;

        if ($result) {
            
            while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {
                
                $id = $linha['id'];
                $tarefa = $linha['descricao'];
                echo "<option value = {strval($id)}>" . $tarefa . "</option>";
            }
        } else {
            echo "Erro";
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
        $conn = null;
        echo "Deu Errado";
    }

?>