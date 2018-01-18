<?php

function insertSort($source = []){

    $len = count($source);

    for($i = 1;$i<$len;$i++){

        $temp = $source[$i];
        for($j =$i-1;$j>=0;$j--){
            if($temp<$source[$j]){
                $source[$j+1] = $source[$j];
                $source[$j] = $temp;
                
            }
        }
    }
    return $source;
}
var_dump(insertSort([231,43,12,2,100,50,31,4,1,89,54]));