<?php

// $list = array("a","b","d","z","c","i","k");

$list = array("20","30","49","10","90","15");

// sort($list);
rsort($list);
foreach($list as $single){
    echo $single."<br>";
}

?>