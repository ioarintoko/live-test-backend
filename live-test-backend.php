<?php

function countPairs($numbers = [], $target = 0){
    $reserved = [];
    $combine = [];
    $show = 0;

    for($i=0; $i < count($numbers); $i++){
        for($j=0; $j < count($numbers); $j++){
            if($i === $j){
                continue;
            } else {
                if(($numbers[$i] + $numbers[$j] == $target)){
                    array_push($combine, $numbers[$i]);
                    array_push($combine, $numbers[$j]);
                    array_push($reserved, $combine);
                }
            }
        }
    }
    
    for($k=0; $k < count($reserved[count($reserved)-1]); $k++){
        for($l=0; $l<count($reserved[count($reserved)-1]); $l++){
            if($k === $l){
                continue;
            }
            if($reserved[count($reserved)-1][$k] === $reserved[count($reserved)-1][$l]){
                unset($reserved[count($reserved)-1][$l]);
            }
        }
    }

    echo count($reserved)/2;
}

countPairs([1,2,3,4,5], 6);