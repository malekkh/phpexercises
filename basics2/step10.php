<?php
function isPalindrome($str) {
    // Convert the string to lowercase and remove non-alphanumeric characters
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));

    // Reverse the string and compare with the original string
    $revStr = strrev($str);
    if($str == $revStr) {
        return true;
    } else {
        return false;
    }
}

// Testing the function
if(isPalindrome("laiyal")) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}
?>