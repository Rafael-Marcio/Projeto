<?php
    $oneNumbers = [];
    $secondNumbers = [];
    $thirdNumbers = [];
    for($i = 0; $i < 3; $i++){
        $number = rand(0,9);
        array_push($oneNumbers,$number);
    }
    for($i = 0; $i < 3; $i++){
        $number1 = rand(0,9);
        array_push($secondNumbers,$number1);
    }
    for($i = 0; $i < 3; $i++){
        $number2 = rand(0,9);
        array_push($thirdNumbers,$number2);
    }
    $someOne = array_sum($oneNumbers);
    $someTwo = array_sum($secondNumbers);
    $someThird = array_sum($thirdNumbers);
    $fourNumbers = $someOne + $someTwo + $someThird;
    $oneNumbers = implode(" ",$oneNumbers);
    $secondNumbers = implode(" ",$secondNumbers);
    $thirdNumbers = implode(" ",$thirdNumbers);
    echo $oneNumbers . "." . $secondNumbers . "." . $thirdNumbers . "-" . $fourNumbers;
    
    
?>