<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decrescer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex flex-column justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://cdn.pixabay.com/photo/2016/09/21/21/59/background-1685845_640.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class=" text-dark text-center  " style="width:800px !important; display: flex; flex-direction: column; justify-content: center; align-itmens: center; font-size: 30px; border: 5px solid white;">
        <?php
            $frase1 = $_POST['frase1'];
            $misturada = str_shuffle($frase1);
            echo $misturada; 
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>