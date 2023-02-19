<?php
function count_word_occurrences($sentence, $word) {
    $words = explode(" ", $sentence);
    $count = 0;
    $i = 0;
    while ($i < count($words)) {
        if ($words[$i] == $word) {
            $count++;
        }
        $i++;
    }
    return $count;
}
print(count_word_occurrences("hello hello guys how are you","hello"));
?>