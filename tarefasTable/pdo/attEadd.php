<?php
//abrindo a conexão com o banco de dados 
//criando as variaveis com os dados para entrar no banco de dados
//PDO::errorCode - Retorna apenas o codigo do erro SQLSTATE
//PDO::errorInfo - Retorna um array com informações do erro
//(codigo do erro, mensagem de erro, codigo do erro)

$server = "172.16.54.174:3310";
$bank = "agenda";
$user = "root";
$passWord = "";
$tarefa = "";
$data = "";
$hora = "";
//tratamento de erro com try
try {
   if(!isset($_GET["id"])){

      if (isset($_POST["action"]) && $_POST["action"] == "adicionar") {

         require_once("class.php");
         $dados = $_POST;
         var_dump($dados);
         $obj = new tarefas();
         $obj->adicionar($dados["descricao"], $dados["data"], $dados["hora"]);
      }
      $header = file_get_contents("../html/Componentes/header.html");
      $footer = file_get_contents("../html/Componentes/footer.html");
      $htmlPage = file_get_contents("../html/forms/form_Tarefa.html");
      
      $htmlPage = str_replace("{header}", $header, $htmlPage);
      $htmlPage = str_replace("{footer}", $footer, $htmlPage);
      $htmlPage = str_replace("{descricao}", $tarefa, $htmlPage);
      $htmlPage = str_replace("{data}", $data, $htmlPage);
      $htmlPage = str_replace("{hora}", $hora, $htmlPage);
      $htmlPage = str_replace("{button}", "adicionar", $htmlPage);
      print $htmlPage;
   }else if(isset($_GET["id"])){
      
       //crianco o objeto pdo para abrir a conexão
       $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8", $user, $passWord);
       //tratamento de erros
       $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $result = $con->query("SELECT * FROM tarefas WHERE id = {$_GET["id"]}");
      $linha = $result->fetch(PDO::FETCH_ASSOC);
      
      $tarefa = $linha["descricao"];
      $data = $linha["data"];
      $hora = $linha["hora"];

      if (isset($_POST["action"]) && $_POST["action"] == "editar") {

         //variaveis vindo com post ou get
         $id = $_POST["id"];
         $tarefa = $_POST["descricao"];
         $dataTarefa = $_POST["data"];
         $horaTarefa = $_POST["hora"];
         $raAluno = '968840';
         //utilizando o prepare
         $prep = $con->prepare("UPDATE agenda.tarefas SET id = :id, descricao = :descricao, data = :data, hora= :hora, raAluno = :raAluno WHERE id = :id");
         $prep->bindValue(":id", $_GET["id"]);
         $prep->bindValue(":descricao", $tarefa);
         $prep->bindValue(":data", $dataTarefa);
         $prep->bindValue(":hora", $horaTarefa);
         $prep->bindValue(":raAluno", $raAluno);
         $res = $prep->execute();
         $con = null;
         echo "<br> {$res} linhas foram atualizadas<br>";

      }

      $header = file_get_contents("../html/Componentes/header.html");
      $footer = file_get_contents("../html/Componentes/footer.html");
      $htmlPage = file_get_contents("../html/forms/form_Tarefa.html");
      
      $htmlPage = str_replace("{header}", $header, $htmlPage);
      $htmlPage = str_replace("{footer}", $footer, $htmlPage);
      $htmlPage = str_replace("{descricao}", $tarefa, $htmlPage);
      $htmlPage = str_replace("{data}", $data, $htmlPage);
      $htmlPage = str_replace("{hora}", $hora, $htmlPage);
      $htmlPage = str_replace("{id}", $_GET["id"], $htmlPage);
      $htmlPage = str_replace("{button}", "Editar", $htmlPage);
      print $htmlPage;
   }
} catch (PDOException $err) {
   $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8", $user, $passWord);
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
