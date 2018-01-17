<?php

function buddleSort($source = []){

    $len = count($source);

    for($i=1;$i<$len;$i++){
        for($j=0;$j<$len-$i;$j++){
            if($source[$j]>$source[$j+1]){
                $temp = $source[$j+1];
                $source[$j+1] = $source[$j];
                $source[$j] = $temp;
            }
        }
    }
    return $source;
}
var_dump(buddleSort([231,43,12,2,100,50,31,4,1,89,54]));