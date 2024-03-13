<?php
function listaCombo()
{
    $cidades = ["Lavras", "Itumirim", "Ribeirão Vermelho", "Bom Sucesso", "Belo Horizonte"];
    $i = 0;
    $saida = '';
    foreach ($cidades as $row) {
        $i = $i + 1;
        $saida .= "<option value = '" . $i . "'>" . $row . "</option>";
    }
    return $saida;
}
function lista2Combo()
{
    //Rafael Márcio Vilas Boas
    //Ano: 2024
    //Semac - lavras
    //PHP DATA OBJECT - PDO - Consulte sempre o Manual Oficial do PHP

    $servidor = "172.16.54.174: 3310";
    $banco = "agenda";
    $usuario = "root";
    $senha = "";
    $output = '';


    //Tratamento de Erro (Exception)
    try {
        //A Conexao
        $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);
        //Tratamento de Erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM tarefas";

        //utilização do método query do objeto $conn tipo PDO
        $result = $conn->query($sql);

        //Fechando a Conexão
        $conn = null;

        if ($result) {
            
            while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {
                
                $id = $linha['id'];
                $tarefa = $linha['descricao'];
                $output .= "<option value = {strval($id)}>" . $tarefa . "</option>";
            }
        } else {
            echo "Erro";
        }
        return $output;
    } catch (PDOException $err) {
        echo $err->getMessage();
        $conn = null;
        echo "Deu Errado";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form style="display: flex; justify-content: space-around; align-items:center;">

        <select name="tarefas" style="font-size: 20px; text-align: center;">

            <?php
            print listaCombo();
            ?>

        </select>
        <select name="tarefas" style="font-size: 20px; text-align: center;">

            <?php
            print lista2Combo();
            ?>

        </select>

    </form>
</body>

</html>