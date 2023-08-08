<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decrescer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex flex-column justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://cdn.pixabay.com/photo/2017/08/20/18/46/pay-2662758_1280.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class=" text-light text-center  " style="width:400px !important;display: flex; justify-content: center; align-itmens: center; font-size: 100px; border: 5px solid white;">
        <?php
            
            $number = $_POST['number'];
            if($number == ""){
                echo "Não tem raiz...";
            }else{
                $source = sqrt($number);
                if($source != round($source,0)){
                    echo "Não tem raiz...";
                }else{
                    echo $source;
                }
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>