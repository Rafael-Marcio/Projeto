<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decrescer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex flex-column justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://media.istockphoto.com/id/178895760/photo/an-abstract-blue-pattern-with-numbers.webp?b=1&s=612x612&w=0&k=20&c=VObdU2mKWjzYdpA13kgNTmYxqN3zaisJHXJH1gC29Uk='); background-repeat: no-repeat; background-size: cover;">
    <div class=" text-dark text-center  " style="width:400px !important; display: flex; flex-direction: column; justify-content: center; align-itmens: center; font-size: 30px; border: 5px solid white;">
        <?php
            $number = $_POST['number'];
            if($number == ""){
                echo "Sem dados para Cálculo...";
            }else{
                for($i = 1; $i <= 10; $i++){
                    $multiplication = $number * $i;
                    echo $number . " x " . $i." = ". $multiplication."<br>";
                }
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>