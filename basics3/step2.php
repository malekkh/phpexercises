<?php

function factorial($num){
    $fact=1;
    $i=1;
    while ($i <= $num) {
        $fact *= $i;
        $i++;
    }

echo "The factorial of $num is $fact.";
}
factorial(5);

?>