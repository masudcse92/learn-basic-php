<?php

echo "Hello world";

// var_dump($_SERVER);

// var_dump($_SERVER['REQUEST_URI']);

$url = $_SERVER['REQUEST_URI'];

// var_dump(parse_url($url));

// echo "<br>";

$parse_url = parse_url($url);

// echo  $parse_url['path'];

// echo "<br>";

// echo $parse_url['query'];

echo "<br>";

parse_str($parse_url['query'], $query_params);

$query_params['name'] = "Masud Rana";

print_r($query_params);
echo "<br>";


$new_query_string = http_build_query($query_params);

// echo $new_query_string;

echo urldecode($new_query_string);

echo "<br>";

echo urlencode($new_query_string);


?>