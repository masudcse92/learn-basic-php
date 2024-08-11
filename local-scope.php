<?php

$person_name = "masud rana"; // global scope
$person_fb = "fb/masudcse92"; // global scope


function getAddress(){
    $person_name = "Masud rana";
    echo $person_name;
}

getAddress();

?>