<?php

function loop($start, $end, $step){
    do{
        echo $start + 1 . " ";
        $start += $step;
    }while($start < $end);
}

loop(1, 20, 2);
