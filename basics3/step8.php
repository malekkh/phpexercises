<?php

function reverse($sentence){
    $reversed_sentence = "";
    for ($i = strlen($sentence) - 1; $i >= 0; $i--) {
        $reversed_sentence .= $sentence[$i];
    }

    echo $reversed_sentence;
}
reverse('hello');

?>