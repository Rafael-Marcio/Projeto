<!DOCTYPE html>
<?php 
    require_once('./pdo/verificar.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tela Principal</title>
</head>
<body>
    <header>
        <img src="./imagens/logo-senacmg.png" alt="Senac-MG">
        <div class="box1"> 
            <div class="box1" style="display: flex; flex-direction:row;">
                <label style=" color: black; padding-right: 6px; font-weight: bold;">Nome: </label>
                <?php 
                    echo $_SESSION['Nome'] . "<br>";
                ?>
            </div>
            <div class="box1" style="display: flex; flex-direction:row;">
                <label style="color: black; padding-right: 6px; font-weight: bold;">Email: </label>
                <?php
                    echo $_SESSION['email'] . "<br>";
                ?>
            </div>
            <div class="box1" style="display: flex; flex-direction:row; ">
                <label style="color: black; padding-right: 6px; font-weight: bold;">Curso: </label>
                <?php
                    if( $_SESSION['Curso'] == "1"){
                        echo "Cabelereira <br>";
                    }
                    elseif( $_SESSION['Curso'] == "2"){
                        echo "Estética <br>";
                    }
                ?>
            </div>
        </div>
    </header>

    <main>
        <div class="box">
            <div class="box1">
                <label>Nome:</label>
                <input type="text" placeholder="Nome">
            </div>
            <div class="box1">
                <label>Quantidade:</label>
                <input type="number" placeholder="Quantidade">
            </div>
            <div class="box1">
                <label>Validade:</label>
                <input type="date" placeholder="Validade">
            </div>
            <div class="box1">
                <label>Lote:</label>
                <input type="text" placeholder="Lote">
            </div>
        </div>
        <div class="box">
            <table class="table">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>

            </table>
        </div>
    </main>
    
</body>
</html>