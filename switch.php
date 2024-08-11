<?php

$current_Day = date("D");

switch($current_Day){
    case $current_Day == "Sun":
        echo "This is Sunday, 10% Discount";
        break;
        
    case $current_Day == "Mon":
        echo "This is monday and get 49%";
        break;

    case $current_Day == "Sat":
        echo " This is sat";
        break;

    default:
    echo " Normaly 5% Discount";
}


?>