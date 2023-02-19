<?php

$transactions = array(
    array('debit' => 100, 'credit' => 50),
    array('debit' => 75, 'credit' => 100),
    array('debit' => 50, 'credit' => 50),
    array('debit' => 200, 'credit' => 150)
);

foreach ($transactions as $transaction) {
    $transaction_amount = abs($transaction['debit'] - $transaction['credit']);
    echo "Transaction amount: " . $transaction_amount . "<br>";
}

?>