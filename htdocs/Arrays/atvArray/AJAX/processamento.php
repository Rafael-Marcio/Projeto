
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