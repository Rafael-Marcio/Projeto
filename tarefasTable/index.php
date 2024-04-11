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
$saida = "";
 //tratamento de erro com try
 try{
    if(isset($_POST["idTarefa"]) && $_POST["action"] == "deletar"){

    $idTarefa = $_POST["idTarefa"];
    //crianco o objeto pdo para abrir a conexão
    $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8",$user,$passWord);
    //tratamento de erros
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //variaveis vindo com post ou get
    //utilizando o prepare
    $prep = $con->exec("DELETE FROM tarefas WHERE id = {$idTarefa}");
    $con = null;
    echo "<br>Tafera do id {$idTarefa} deletada <br>";
    echo "<a href ='../index.php'>Home</a>";

}else{

    //crianco o objeto pdo para abrir a conexão
    $con = new PDO("mysql:dbname=$bank;host=$server;charset=utf8",$user,$passWord);
    //tratamento de erros
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res = $con->query("SELECT * FROM tarefas WHERE raAluno = 2806");
    if($res){
        $linha = $res->fetch(PDO::FETCH_ASSOC);
        while($linha){
            $saida .= "<tr> <td> {$linha['id']} </td> 
              <td> {$linha['descricao']} </td> 
              <td> {$linha['data']} </td> 
              <td> {$linha['hora']} </td> 
              <td> <button type='button' id='btnEditar' data-id='{$linha['id']}' onclick='NovoForm({$linha['id']})'>editar</button></td> 
              <td> <button type='button' id='btnDel' data-id='{$linha['id']}'>Deletar</button></td>  
            </tr>";
            // echo $linha['id'] . " - " . $linha['descricao'] . ' - ' . $linha['data'] . ' - ' . $linha['hora'] . '</hr>';
            $linha = $res->fetch(PDO::FETCH_ASSOC);
        }
        $con = null;
    }
    else{
        echo "erro";
    }
    $header = file_get_contents("./html/Componentes/header.html");
    $footer = file_get_contents("./html/Componentes/footer.html");
    $htmlPage = file_get_contents("./html/index.html");
    $htmlPage = str_replace("{registrosDaTabela}",$saida,$htmlPage);
    $htmlPage = str_replace("{header}",$header,$htmlPage);
    $htmlPage = str_replace("{footer}",$footer,$htmlPage);
    print $htmlPage;
}
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
?>