<?php
function checkParallelogram($side1,$side2,$diagonal){

    if ($side1 == $side2 && $diagonal**2 == 2*($side1**2 + $side2**2)) {
        echo "The parallelogram is a rectangle.";
    } elseif ($side1 == $side2 && $side1 == $diagonal) {
        echo "The parallelogram is a rhombus.";
    } else {
        echo "The parallelogram is neither a rectangle nor a rhombus.";
    }
}
checkParallelogram(5,5,5);
?>