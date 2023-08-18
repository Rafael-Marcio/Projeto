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
            $numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
            foreach($numbers as $number){
                if($number == 2){
                    echo $number."|  Esse número é primo. <br>";
                }else if($number == 1){
                    echo $number."|  Esse número não é primo. <br>";
                }else if($number == 3){
                    echo $number."|  Esse número é primo. <br>";
                }else if(($number  % 2 == 0) || ($number % 3 == 0) || ($number % 5 == 0) || ($number % 7 == 0) || ($number % 9 == 0)){
                    echo $number."|  Esse número não é primo. <br>";
                }else{
                    echo $number."|  Esse número é primo. <br> ";
                }
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>