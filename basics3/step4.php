<?php
function sumDigit($number){
$sum = 0;
while ($number != 0) {
    $digit = $number % 10;
    $sum += $digit;
    $number = floor($number / 10);
    echo $digit,"<br>";
}
echo "The sum of the digits is: $sum";
}
sumDigit(7474740);
?>