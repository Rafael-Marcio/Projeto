<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex align-items-center justify-content-center" style="width:100vw; heigth: 100vh; margin-top: 400px;">
    <main class="container d-flex flex-column justify-content-center align-items-center border border-primary border-5 bg-secondary text-center " style="width: 300px; height:400px; font-size: 20px; font-weight: bold; background-image: url('https://imagens.climatempo.com.br/climapress/galeria/2022/09/24149ded1d56e76a97dd88c6bbc9a80b.jpg'); background-size: cover;">
        <hr>
        <strong>Temperatura em Farenheit: </strong><?=$_POST["temperatura"]?><br>
        <?php
            $temperatura = $_POST["temperatura"];
            $temperatura_Celsius =(5*($temperatura-32)/9);
            $temperatura_Celsius = round($temperatura_Celsius,2);
            $temperatura_kelvin = ($temperatura_Celsius + 273);
            $temperatura_kelvin = round($temperatura_kelvin,2);
            echo "<hr>Temperatura em Celsius: ".$temperatura_Celsius;
            echo "<hr>Temperatura em Kelvins: ".$temperatura_kelvin;
        ?>
        <hr>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>