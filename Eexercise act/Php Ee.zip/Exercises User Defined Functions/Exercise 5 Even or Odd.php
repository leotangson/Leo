<?php
function evenOrNot($num1) {

    if ($num1 % 2 == 0) {
        echo "$num1 is even.";
    } else {
        echo "$num1 is odd.";
    }
}

$num1 = 7;

evenOrNot($num1);
?>
