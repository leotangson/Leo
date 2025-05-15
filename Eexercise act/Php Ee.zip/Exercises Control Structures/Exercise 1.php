<?php

$number1 = 25;
$number2 = 40;


if ($number1 > $number2) {
    echo "Highest value: $number1\n";
    echo "Lowest value: $number2\n";
} elseif ($number2 > $number1) {
    echo "Highest value: $number2\n";
    echo "Lowest value: $number1\n";
} else {
    echo "Both numbers are equal: $number1\n";
}
?>
