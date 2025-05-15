<?php

$num1 = 10; 
$num2 = 5;  


function addNumbers($a, $b) {
    return $a + $b;
}


function subtractNumbers($a, $b) {
    return $a - $b;
}


function multiplyNumbers($a, $b) {
    return $a * $b;
}


function divideNumbers($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero is not allowed."; 
    }
    return $a / $b;
}


$addition = addNumbers($num1, $num2);
$subtraction = subtractNumbers($num1, $num2);
$multiplication = multiplyNumbers($num1, $num2);
$division = divideNumbers($num1, $num2);


echo "Addition: $num1 + $num2 = $addition\n";
echo "Subtraction: $num1 - $num2 = $subtraction\n";
echo "Multiplication: $num1 * $num2 = $multiplication\n";
echo "Division: $num1 / $num2 = $division\n";
?>
