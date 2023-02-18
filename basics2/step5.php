<?php
function wordTodigit($word){
    switch ($word) {
    case "zero":
        echo "0";
        break;
    case "one":
        echo "1";
        break;
        case "two":
        echo "2";
        break;
        case "three":
        echo "3";
        break;
        case "four":
        echo "4";
        break;
        case "five":
        echo "5";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
}
wordTodigit('one')
?>