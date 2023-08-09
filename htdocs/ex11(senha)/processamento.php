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
            $password=$_POST['password'];
            $upper = 0;
            $lower = 0;
            $symbol = 0;
            $no_symbol = 0;
            if((strlen($password) >= 8) and (strlen($password) <=15)){
                for($i = 0; $i <= strlen($password)-1;$i++){
                    if (ctype_upper($password[$i])) {
                        $score_Upper = $password[$i];
                        $upper = $upper + 1;
                    } else {
                        $score_Lower = $password[$i];
                        $lower = $lower + 1;
                    }
                }
                if($upper >= 2){
                    for($i = 0; $i <= strlen($password)-1;$i++){
                        if(ctype_punct($password[$i])){
                            $score_Symbol = $password[$i];
                            $symbol = $symbol + 1;
                        }else{
                            $score_noSymbol = $password[$i];
                            $no_symbol = $no_symbol + 1;
                        }
                    }
                    if($symbol >= 1){
                        echo "Ótimo essa senha é válida!";
                    }else{
                        echo "Erro... Essa senha não é válida pois ela não contém um símbolo todos os requisitos";
                    }
                }else{
                    echo "<br> Senha inválida pois não contém 2 letras maiúsculas recomeçe o processo e siga os requisitos";
                }
            }else if(strlen($password) >= 15){
                echo "Erro... A senha contém mais caracteres do que a quantidade nescessária.";
            }else{
                echo "Erro... A senha não contém a quantidade de caracteres nescessárias.";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
