<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Relatorio Livros!!</h2>
    <table border 1px>
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Nome do livro</th>
                <th>Ano</th>
                <th>Paginas</th>
                <th>Autor</th>
                <th>Editora</th>
            </tr>  
        </thead>
        <tbody>
            <?php

 $sql = "SELECT * FROM ibituruna.livros LIMIT 200";
 require_once("conexaoMyuSql.php");
 $queryLivros = $pdo->query($sql);
 $res = $queryLivros->fetchAll(PDO::FETCH_ASSOC);
 $linhas = @count($res);
 for($i = 0; $i <= $linhas-1; $i++){
     $contagem = $i +1;
                //montando a tabela
                echo "<tr>";
                    echo "<td>" . $contagem . "</td>";
                    echo "<td>" . $res[$i]["id"] . "</td>";
                    echo "<td>" . $res[$i]["titulo"] . "</td>";
                    echo "<td>" . $res[$i]["ano"] . "</td>";
                    echo "<td>" . $res[$i]["n_de_p_ginas"] . "</td>";
                    echo "<td>" . $res[$i]["autor"] . "</td>";
                    echo "<td>" . $res[$i]["editora"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
