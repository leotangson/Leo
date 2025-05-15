<?php

$price = 100; 
$vat = 0.18; 


function calculateVat($price, $vat) {
   
    $calculatedVat = $price * $vat;
    
    $calculatedPrice = $price + $calculatedVat;
    
    
    return array('calculatedVat' => $calculatedVat, 'calculatedPrice' => $calculatedPrice);
}


$result = calculateVat($price, $vat);


echo "Price: $" . number_format($price, 2) . "\n";
echo "VAT: $" . number_format($result['calculatedVat'], 2) . "\n";
echo "Total Price: $" . number_format($result['calculatedPrice'], 2) . "\n";
?>
