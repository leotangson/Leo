<?php

$text = "Hello, world! This is a test... Does it work? Yes—it does.";


function searchText($str, $punctuation) {
   
    $count = substr_count($str, $punctuation);
    
  
    echo "The character '$punctuation' appears $count time(s) in the text.\n";
}

searchText($text, '.');
searchText($text, ',');
searchText($text, '!');
searchText($text, '?');
?>
