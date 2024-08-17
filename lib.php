<?php


function getFulName($fullName, $lastName){
 

    $fullName = $fullName . $lastName;

    return $fullName;
}

function priceCalculate($price=0, $qty=0){
   
    $total_price = $price*$qty;

    return $total_price;
}

?>