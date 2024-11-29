<?php

// File read (R)

// $file_name = "C:\\laragon\\www\\learn-basic-php\\file\\text.php";

// $file_pointer = fopen($file_name,"r");

// while($data = fgets($file_pointer)){
//     echo $data;
//     echo"<br>";
// }
// fclose($file_pointer);

// $customArr = file($file_name);
// print_r($customArr);

// $data = file_get_contents($file_name);

// echo $data;



// File Write (W)

// $file_name = "C:\\laragon\\www\\learn-basic-php\\file\\text.php";

// $file_pointer = fopen($file_name,"a");

// fwrite($file_pointer, "Morium Begum\n");
// fwrite($file_pointer, "Apple");


// file_put_contents($file_name, "Apple\n", FILE_APPEND | LOCK_EX);
// file_put_contents($file_name, "Bannana\n", FILE_APPEND | LOCK_EX);
// file_put_contents($file_name, "Oranege\n", FILE_APPEND | LOCK_EX);

$file_name = "C:\\laragon\\www\\learn-basic-php\\file\\text.php";

$persons = array (
    array (
        'name' => 'Jone Deo',
        'mail' => 'jone@gmail.com',
        'age'  => 26
    ),
    array (
        'name' => 'Dev Deo',
        'mail' => 'dev@gmail.com',
        'age'  => 26
    ),
    array (
        'name' => 'Marry Dev',
        'mail' => 'marry@gmail.com',
        'age'  => 28
    )
);


$file_pointer = fopen($file_name, "w");

foreach( $persons as $person){
    $data = sprintf("%s, %s, %s\n", $person['name'], $person['mail'], $person['age']);
    fwrite($file_pointer, $data);
}
?>