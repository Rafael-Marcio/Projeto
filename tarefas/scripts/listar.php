<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/limpo.css">
    <title>Document</title>
</head>

<body style="display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: rgba(20, 20, 20, 0.425); ">
    <h2 style="color: white;">Relatorio Agenda!!</h2>
    <div class="box" style=" border: 1px; font-size: 24px; background-color: rgba(20, 20, 20, 0.425); border: 2px solid black; width: 70vw; height: 70vh; border-radius: 30px; display: flex; flex-direction: column; justify-content: center; align-items:  center; text-align: justify; box-shadow: rgba(70, 0, 200, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
        <table style="color: white; background-color: black;">
            <thead>
                <tr style="background-color: black;">
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Descrição</th>
                    <th style="text-align: center;">Data</th>
                    <th style="text-align: center;">Hora</th>
                    <th style="text-align: center;">raAluno</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $servidor = '172.16.54.174:3310';
                $banco = 'agenda';
                $usuario = 'root';
                $senha = '';

                //

                try {
                    $conn = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    $sql = "SELECT * FROM agenda.tarefas WHERE raAluno = 968840";
                    $result = $conn->query($sql);
                    $res = $result->fetchAll(PDO::FETCH_ASSOC);
                    $linhas = @count($res);
                    for ($i = 0; $i <= $linhas - 1; $i++) {
                        $contagem = $i + 1;
                        //montando a tabela
                        echo "<tr class='row'>";
                        echo "<td id=' " . $res[$i]["id"] . "'>" . $res[$i]["id"] . "</td>";
                        echo "<td>" . $res[$i]["descricao"] . "</td>";
                        echo "<td>" . $res[$i]["data"] . "</td>";
                        echo "<td>" . $res[$i]["hora"] . "</td>";
                        echo "<td>" . $res[$i]["raAluno"] . "</td>";
                        echo "<td> <button class='edit'> Editar </button> </td>";
                        echo "<td> <button class='excluir' id='btnExcluir' onclick='removerElemento(event.target," . $res[$i]["id"] . ")'> Excluir </button> </td>";
                        echo "</tr>";
                    }
                } catch (Exception $e) {
                    echo '<script>console.log(' . $e . ')</script>';
                }

                $conn = null;
                ?>
            </tbody>
        </table>
    </div>
</body>



<script type="text/javascript">
    function removerElemento(elementoClicado, idTarefa) {
        elementoClicado.closest("tr").remove();

        // Construa a URL com os parâmetros
        var url = 'deletarLinha.php?id=' + idTarefa;
        window.location.href = url;
    }
</script>

</html>