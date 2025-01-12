<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

    <title>Products</title>
</head>
<body>

<h1>Product Catalog</h1>

<?php
// var_dump($_GET);

echo "My name is : {$_GET['name']}"."<br>";

echo "Age :  {$_GET['age']}";

?>


<ul>
    <li><a href="product.php?category=coffe">Coffe</a></li>
    <li><a href="product.php?category=food">Food</a></li>
    <li><a href="product.php?category=cloth">Cloths</a></li>
 
</ul>
    
</body>
</html>