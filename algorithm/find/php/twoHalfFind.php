<?php

/*
* 使用递归算法 //二分法查找数据的算法必须是有序的
*/
function twoHalfF($source = [],$start = 0,$end = 0,$target){

    $middile = floor(($start+$end)/2);

    if($source[$middile] == $target){
        return true;
    }else if($source[$middile] > $target){
        $end = $middile -1;
        if($end <0){
            return false;
        }
        return twoHalfF($source,$start,$end,$target);
    }else{
        $start = $middile + 1;
        if($start >= $end){
            return false;
        }
        return twoHalfF($source,$start,$end,$target);
    }
    return false;
}

var_dump(twoHalfF([1,4,7,56],0,3,7));

