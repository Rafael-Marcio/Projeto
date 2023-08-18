
    <?php
        $valor = $_POST['valor'];
        $acerto = rand(0,1);
        if($valor == $acerto){
            echo    "Parabéns você acertou!";
        }else{
            echo    "Errou tente novamente!";
            echo    "O número era:   ";
            echo $acerto;
        }
    ?>