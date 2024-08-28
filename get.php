<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">

        <label for="username">User Name</label>
        <input type="text" name="username">
        <label for="email">Email</label>
        <input type="text" name="email">

        <button type="submit">Submit</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD']== 'GET'){
        $username = $_GET['username'];
        $email = $_GET['email'];

        if(!empty($username)){
            echo $username.$email;
        } else {
            echo "Please fillup in the user name";
        }
    }

    ?>
    
</body>
</html>