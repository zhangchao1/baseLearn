<?php

function selectSort($source = []){

    $len = count($source);

    for($i=0;$i<$len-1;$i++){
        $p = $i;
        for($j = $i +1 ;$j<$len;$j++){
            if($source[$p]>$source[$j]){
                $p = $j;
            }
        }

        if($p != $i){
            $temp = $source[$p];;
            $source[$p] = $source[$i];
            $source[$i] = $temp;
        }
    }
    return $source;
}
var_dump(selectSort([231,43,12,2,100,50,31,4,1,89,54]));