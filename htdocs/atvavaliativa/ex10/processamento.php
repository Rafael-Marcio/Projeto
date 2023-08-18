<?php
    $potencia =  $_POST['potencia'];
    $tempo =  $_POST['tempo'];
    $qntd =  $_POST['qntd'];
    $duracao =  $_POST['duracao'];
    $valorPago = (($potencia / 1000) * ($tempo / 60) * $qntd * $duracao) * 0.70;
    echo "O Valor pago é: R$$valorPago.";

?>