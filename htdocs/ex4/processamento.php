<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex justify-content-center align-items-center" style="width: 100vw; height: 92vh;">
        <main class="container bg-secondary d-flex justify-content-center align-items-center " style="widht: 80%; height: 80%; background-image: url('https://agrosaber.com.br/wp-content/uploads/2021/05/Banner_PseudoFrutas-Ma%C3%A7%C3%A3.jpg'); background-size: cover;">
            <div class="card text-dark" style="width: 190px;">
                <?php
                $palavra = $_POST["palavra"];
                $numero = $_POST["numero"];
                echo $palavra;
                for($i = 1; $i<$numero; $i++){
                    echo "*".$palavra;
                }
                ?>
            </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>