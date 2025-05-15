<?php

$str = "The Quick Brown FOX Jumps Over The Lazy DOG.";


function lowercaseCheck($text) {
   
    return strtolower($text);
}


$lowercaseText = lowercaseCheck($str);
echo "Lowercase text: " . $lowercaseText;
?>
