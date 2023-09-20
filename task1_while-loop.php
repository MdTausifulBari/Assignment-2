<?php

function loop($start, $end, $step){
    while($start < $end){
        echo $start + 1 . " ";
        $start += $step;
    }
}

loop(1, 20, 2);