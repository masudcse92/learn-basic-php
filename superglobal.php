<?php

// Super global variable 

$GLOBALS;

// $_SERVER;
// $_POST;
// $_GET;
// $_ENV;
// $_FILES;
// $_SESSION;
// $_COOKIE;


$person_name = "Masud Rana";

function getName(){
    echo $GLOBALS['person_name'];
}



echo $_SERVER['SERVER_NAME'];

?>