<?php

$expenses = array(500, 150, 200, 120, 300); 

$totalAmount = 0;
$amountOfExpenses = count($expenses); 

foreach ($expenses as $expense) {
    $totalAmount += $expense;
}

echo "Total Expenses: $" . number_format($totalAmount, 2) . "\n";
echo "Number of Expenses: $amountOfExpenses";
?>
