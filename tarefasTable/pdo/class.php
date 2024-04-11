<?php 
class tarefas{


    function adicionar($descricao, $data, $hora){
        $server = "172.16.54.174:3310";
        $bank = "agenda";
        $user = "root";
        $passWord = "";
        //tratamento de erro com try
        try{
            //crianco o objeto pdo para abrir a conexão
            $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8",$user,$passWord);
            //tratamento de erros
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //variaveis vindo com post ou get
            // $tarefa = $descricao;
            // $dataTarefa = $data;
            // $horaTarefa = $hora;
             $raAluno = '2806';
             // Add id 
             $sql = "SELECT max(id) as next FROM tarefas";
    
            $result = $con->query($sql);
            $linha = $result->fetch(PDO::FETCH_ASSOC);
    
            $next = (int) $linha['next'] + 1;
            //utilizando o prepare
            $prep = $con->prepare("INSERT INTO tarefas (id,descricao,data,hora,raAluno) VALUES (:id,:descricao, :data, :hora, :raAluno)");
            $prep->bindParam(":id",$next,PDO::PARAM_STR);
            $prep->bindParam(":descricao",$descricao,PDO::PARAM_STR);
            $prep->bindParam(":data",$data,PDO::PARAM_STR);
            $prep->bindParam(":hora",$hora,PDO::PARAM_STR);
            $prep->bindParam(":raAluno",$raAluno,PDO::PARAM_STR);
            $res = $prep->execute();
            
            $con = null;
            echo "<br> {$res} linhas foram inseridas <br>";
        }catch(PDOException $err){
            $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8",$user,$passWord);
            // echo "Codigo do erro foi: " . $con->errorCode() . "<br>";
            // print_r($con->errorInfo());
            // echo "<br>";
            //outra forma de mostrar o erro
            // echo $con->errorInfo()[0] . "<br>";
            // echo $con->errorInfo()[1] . "<br>";
            // echo $con->errorInfo()[2] . "<br>";
            echo "As informações do erro foram: " . $con->errorInfo() . "<br>";
            echo $err->getMessage();
            $con = null;
        }
    }

    
}
?>