<?php

$cell = "092474444";
$name = "muntasir";





function getName(){
    
    global $name , $cell;

    echo "Name: ". $name . " <br> Phone Number :" .$cell;
}

getName();

?>