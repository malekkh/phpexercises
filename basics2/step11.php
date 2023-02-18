<?php
function isPrime($number) {
  if ($number < 2) {
    echo "pick number greater than 2";
    return false; 
  }
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
      echo $number,' is not a prime number';
      return false; 
    }
  }
   echo $number," is a prime number";
  return true;
}
isPrime(11);
