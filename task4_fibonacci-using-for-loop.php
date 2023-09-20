<?php

function loop($n){
    echo "0 1 ";

    $n -= 2;

    for($i = $k = 0, $fibonacci_number = $j = 1; $i < $n; $i++){
        $k = $fibonacci_number;
        $fibonacci_number = $fibonacci_number + $j;
        $j = $k;

        echo $fibonacci_number . " ";
    }

}

loop(15);