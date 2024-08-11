<?php

// $post = 20;
// $init = 0;

// for($init=0; $init<=$post; $init++){
//     echo "This is my best post ".$init."</br>";
// }

$info = array("Masud Rana","0176892048","Mirpur, dhaka");
$count_array_value = count($info);

for($i=0; $i<$count_array_value; $i++){
    echo $info[$i]."</br>";
}


?>