<?php
    $altura = $_POST['altura'];
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $volume = $altura * $largura * $comprimento;
    echo $volume;
?>