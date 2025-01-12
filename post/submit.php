<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
        echo "Registration Successfull <br>";
        echo "Username: " . $username . "<br>" . $password;
    }
     else {
        echo "Both fields are required";
     }
}

?>