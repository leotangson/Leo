<?php

$first = 0;
$second = 1;


echo "Fibonacci series from 0 to 50:\n";
echo $first . " " . $second . " "; 


while (true) {
    $next = $first + $second;
    
    if ($next > 50) {
        break; 
    }
    
    echo $next . " "; 
    $first = $second; 
    $second = $next; 
}
?>
