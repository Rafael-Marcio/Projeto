<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decrescer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex flex-column justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://cdn.pixabay.com/photo/2016/09/21/21/59/background-1685845_640.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class=" text-dark text-center  " style="width:800px !important; display: flex; flex-direction: column; justify-content: center; align-itmens: center; font-size: 40px; border: 5px solid white;">
        <?php
            $name = $_POST['name'];
            $name_exp = explode(" ",$name);
            $email = "";
            $list = [];
            $cont =count($name_exp);
            for($i = 0; $i <= count($name_exp)-2;$i++){
              array_push($list,substr($name_exp[$i],0,1));
            }
            $email = $list;
            $lastName = $name_exp[$cont-1];
            $email = implode("",$email);
            echo "E-mail concluído: <br>".$email.$lastName."@NightShade.com";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>