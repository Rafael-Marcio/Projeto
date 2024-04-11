<?php
    function get_tarefa($id){

        $servidor = "172.16.54.174:3310";
        $banco = "agenda";
        $usuario = "root";
        $senha = "";
        $saida = "";

        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM tarefas WHERE id = '{$id}'";

        $result = $conn->query($sql);
        $linha = $result->fetch(PDO::FETCH_ASSOC);

        $conn = null;
        return $linha;

    }
    function delete_Tarefa($id){

        $servidor = "172.16.54.174:3310";
        $banco = "agenda";
        $usuario = "root";
        $senha = "";
        $saida = "";

        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM tarefas WHERE id = '{$id}'";

        $result = $conn->exec($sql);
        if($result){
            $resultado = "Deletado";
        }else{
            $resultado = "Não Localizado";
        }
        
        $conn = null;
        return $resultado;
    }
    function update_Tarefa($tarefa){
        $servidor = "172.16.54.174:3310";
        $banco = "agenda";
        $usuario = "root";
        $senha = "";
        $saida = "";

        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE tarefas SET descricao = :descricao, data = :data, hora = :hora  WHERE id = :id";
        $result = $conn->prepare($sql);
        $result->bindValue(':descricao',$tarefa["tarefa"]);
        $result->bindValue(':data',$tarefa["data"]);
        $result->bindValue(':hora',$tarefa["hora"]);
        $result->bindValue(':id',$tarefa["id"]);
        $count = $result->execute();
        $retorno = "$count linha foi afetada!";
        return $retorno;
    }
    function Insert_Tarefa($tarefa,$data,$hora,$raAluno){
        $servidor = "172.16.54.174:3310";
        $banco = "agenda";
        $usuario = "root";
        $senha = "";
        $saida = "";

        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tarefas (descricao, data, hora, raAluno) VALUES (:descricao, :data, :hora, :raAluno)";
        $result = $conn->prepare($sql);
        $result->bindValue(':descricao',"$tarefa");
        $result->bindValue(':data',"$data");
        $result->bindValue(':hora',"$hora");
        $result->bindValue(':raAluno',"$raAluno");
        $count = $result->execute();
        $resposta = "$count linha foi afetada!";
        return $resposta;
    }
    function list_Tarefa(){

        $servidor = "172.16.54.174:3310";
        $banco = "agenda";
        $usuario = "root";
        $senha = "";
        $saida = "";

        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM tarefas LIMIT 20";

        $result = $conn->query($sql);
        $registros = $result->fetchAll(PDO::FETCH_ASSOC);

        $conn = null;
        return $registros;
    }
    function next_ID(){
        $servidor = "172.16.54.174:3310";
        $banco = "agenda";
        $usuario = "root";
        $senha = "";
        $saida = "";

        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT max(id) as next FROM tarefas";

        $result = $conn->query($sql);
        $linha = $result->fetch(PDO::FETCH_ASSOC);

        $next = (int) $linha['next'] + 1;
        $conn = null;
        return $next;
    }
?>