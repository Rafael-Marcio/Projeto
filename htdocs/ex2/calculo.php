<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex align-items-center justify-content-center" style="width:100vw; heigth: 100vh; margin-top: 400px;">
    <main class="container d-flex flex-column justify-content-center align-items-center border border-primary border-5 bg-secondary " style="width: 300px; height:300px;">
        <hr>
        <strong>Ganho por hora: </strong><?=$_POST["hora"]?><br>
        <strong>Horas trabalhadas no mês: </strong><?=$_POST["mes"]?><br>
        <?php
            $hora = $_POST["hora"];
            $mes = $_POST["mes"];
            $total_ganho =$hora*$mes;
            $total_ganho = round($total_ganho,2);
            echo $total_ganho;
        ?>
        <hr>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>