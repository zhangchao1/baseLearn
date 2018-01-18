<?php

function directFind($source= [],$target){

    for($i = 0;$i<count($source);$i++){

        if($source[$i] == $target){
            return true;
        }
    }

    return false;
}

var_dump(directFind([1,4,56,7],7));