<?php
function isPowerOfTwo($num) {
    if($num <= 0) {
        return false;
    }
    while($num > 1) {
        if($num % 2 != 0) {
            return false;
        }
        $num = $num / 2;
    }
    return true;
}

// Testing the function
if(isPowerOfTwo(16)) {
    echo "16 is a power of two.";
} else {
    echo "16 is not a power of two.";
}