<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Números pares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex flex-column justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://images.unsplash.com/photo-1610730260505-0b9ed7f06293?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGZ1bmRvJTIwZXNwYSVDMyVBN298ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60'); background-repeat: no-repeat; background-size: cover;">
    <div class=" text-white text-center  " style="width:800px !important; display: flex; flex-direction: column; justify-content: center; align-itmens: center; font-size: 40px; border: 5px solid white;">
        <?php
            $numbers = [];
            for($i = 1; $i < 7; $i++){
                $number = rand(1, 60);
                if(!in_array($number,$numbers)){
                    array_push($numbers,$number);
                }else{
                    $i--;
                }
            }
            sort($numbers);
            $numbers = implode("         |         ",$numbers);
            print_r($numbers);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>