<?php

$workingHours = 12000;
$ageOfMachine = 8;
$failuresPerYear = 30; 


if ($workingHours > 10000 || $ageOfMachine > 7 || $failuresPerYear > 25) {
    echo "The machine should be replaced.\n";
} else {
    echo "The machine does not need to be replaced.\n";
}
?>
