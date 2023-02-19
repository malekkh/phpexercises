<?php
$rows = 5; // replace with the number of rows you want

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}
?>