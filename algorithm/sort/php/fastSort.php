
<?php

function fastSort($source = []){

    $len = count($source);
    if($len<=1){
        return $source;
    }

    $left_s = [];
    $right_s = [];

    $baseNum = $source[0];

    for($i =1;$i<$len;$i++){
        if($source[$i]>$baseNum){
            $right_s[] = $source[$i];
        }else{
            $left_s[] = $source[$i];
        }
    }

    $right_s =fastSort($right_s);
    $left_s = fastSort($left_s);
    $source = array_merge($left_s,[$baseNum],$right_s);
    return $source;
}
var_dump(fastSort([231,43,12,2,100,50,31,4,1,89,54]));