<?php

function randNumber($min = 0, $max = 1) {
    
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}


$randomFloat = randNumber(1.5, 9.9);
echo "Random float number: " . $randomFloat;
?>
