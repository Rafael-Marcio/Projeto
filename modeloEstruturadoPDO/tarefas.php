<?php

function Tabela(){
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

        $sql = "SELECT * FROM tarefas WHERE raAluno = '968840'";

        //utilização do método query do objeto $conn tipo PDO
        $result = $conn->query($sql);

        //Fechando a Conexão
        $conn = null;

        if ($result) {
            
            while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {
                
                $id = $linha['id'];
                $tarefa = $linha['descricao'];
                $data = $linha['data'];
                $hora = $linha['hora'];
                echo "<tr> <td>".$id."</td><td>".$tarefa."</td><td>".$data."</td><td>".$hora."</td><td><button onclick='removerElemento(" . $linha["id"] . ")'>Excluir</button></td><td><button onclick='atualizarElemento(" . $linha["id"] . ")'>Editar</button></td></tr>";
            }
        } else {
            echo "Erro";
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
        $conn = null;
        echo "Deu Errado";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
    
</head>
<body>
    <span>Dados:</span>
    <input type="text" id="tarefa">
    <input type="date" id="data">
    <input type="time" id="hora">
    <button id="btnInserir">Salvar</button>
    <table>
        <tr>
            <th>ID</th>
            <th>Tarefa</th>
            <th>Data</th>
            <th>Hora</th>
        </tr>
        <tbody>
            <?php Tabela();?>
        </tbody>
    </table>
</body>

<script>
    function removerElemento( idTarefa) {

        // Construa a URL com os parâmetros
        var url = './PDO/delete.php?id=' + idTarefa;
        window.location.href = url;
    }
    function atualizarElemento(idTarefa) {

        // Construa a URL com os parâmetros
        let tarefa = $('#tarefa').val();
        let data = $('#data').val();
        let hora = $('#hora').val();
        var url = './PDO/update.php?id=' + idTarefa + '&tarefa=' + tarefa + '&data=' + data + '&hora=' + hora;
        window.location.href = url;
    }



    $(document).ready(function(){
        $('#btnInserir').click(function(){
            //Resposta no SELECT da TELA
            let tarefa2 = document.getElementById('tarefa').value;
            let data2 = document.getElementById('data').value;
            let hora2 = document.getElementById('hora').value;
            //Pegando as variáveis
            var codigo = "968840";

            console.log(codigo);
            console.log(tarefa2);
            console.log(data2);
            console.log(hora2);
            //Método POST - AJAX com JQuery
            $.post("./PDO/bindValue.php",  {
                
                tarefa: tarefa2,
                data: data2,                
                hora: hora2,
                cod: codigo,
            })
            //Função saída do AJAX
            .done(function(resposta){
                //mensagem.innerHTML = resposta;
                console.log(resposta);
                window.location.href = "tarefas.php";
            })
        })
    })

</script>

</html>