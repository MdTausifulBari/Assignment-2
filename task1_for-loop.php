<?php

function loop($start, $end, $step){
    for(; $start < $end; $start += $step){
        echo $start + 1 . " ";
    }
}

loop(1, 20, 2);