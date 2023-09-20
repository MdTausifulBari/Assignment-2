<?php

function fibonacci($n){
    if($n == 0)
        return 0;

    if($n == 1)
        return 1;
    
    return fibonacci($n - 1) + fibonacci($n - 2);
}

for($i = 0; $i < 10; $i++){
    $fibonacci_number = fibonacci($i);

    if($fibonacci_number > 100)break;

    echo $fibonacci_number . " ";
}