<?php
// Define the integer for which you want to display the multiplication table
$number = 5; // You can change this number to any integer
$start = 1; // Starting multiplier
$end = 10; // Ending multiplier

// Display the multiplication table for the given integer
echo "Multiplication table of $number:\n";
for ($i = $start; $i <= $end; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result\n";
}
?>
ss