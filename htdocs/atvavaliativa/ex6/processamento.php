<?php
    $cem = $_POST['cem'];
    $quanto = $_POST['quanto'];
    $quantoCem = $quanto * $cem;
    $resposta = $quantoCem / 100;
    echo $resposta;
?>