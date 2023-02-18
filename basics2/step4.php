<?php

function ArmstrongNum($num){
    $str=(string)$num;
    if(count(str_split($str))==3){
        if((($str[0]**3)+($str[1]**3)+($str[2]**3))==$num){
            echo "$num is an armstrong number";
        }else{
            echo "not an armstrong number";
        }
    }else{
        echo "armstrong number should be 3 digits";
    }
}
 ArmstrongNum(15);

?>