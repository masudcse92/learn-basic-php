<?php

$file_name = "C:\\laragon\\www\\learn-basic-php\\file\\text.php";


$file_pointer = fopen($file_name,"r");

// while($data = fgets($file_pointer)){
//     echo $data;
//     echo"<br>";
// }
// fclose($file_pointer);

// $customArr = file($file_name);
// print_r($customArr);

$data = file_get_contents($file_name);

echo $data;

?>