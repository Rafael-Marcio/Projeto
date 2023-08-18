<?php
    $number = $_POST['number1'];
    if($number > 0){
        echo "Esse número é positivo!";
    }else if( $number < 0){
        echo "Esse número é negativo!";
    }
?>