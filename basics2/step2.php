<?php
function greaterFn($num) {
  if ($num > 30) {
    echo $num , " is greater than 30";
  } elseif (20 < $num && $num < 30) {
    echo $num ," is greater than 20";
  } elseif (10 < $num && $num < 20) {
    echo $num ," is greater than 10";
  } elseif ($num < 10) {
    echo $num ," is less than 10";
  }
}
greaterFn(7)
?>