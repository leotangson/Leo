<?php

function swapNumbers(&$num1, &$num2) {
    
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

$num1 = 10;
$num2 = 20;

echo "Before swap: num1 = $num1, num2 = $num2\n";

swapNumbers($num1, $num2);

echo "After swap: num1 = $num1, num2 = $num2\n";
?>
