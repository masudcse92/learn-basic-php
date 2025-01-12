<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Product</title>
</head>
<body>

<?php

$products = [
    "coffe" => "Products 1 details : A coffe products.",
    "food" => "Products 2 details : A Food products.",
    "cloth" => "Products 3 details : A cloths hot products."
];

// if(isset($_GET['category'])){
//     $productID = $_GET['category'];

//     if(isset($products[$productID])){
//         echo "<h1> Product Details </h1>";
//         echo "<p>". $products[$productID]. "</p>";
//     }
//     else {
//         echo "<h1> Product not found. </h1>";
//     }
// } else {
//     echo "<h1> No product selected. </h1>";
// }

if(isset($_GET['category'])){
    $productID = $_GET['category'];

    if(isset($products[$productID])){
        echo "<h1>Product Details</h1>";
        echo "<p>" . $products[$productID]. "</p>";
    } 
    else {
        echo "<h1> . Product not found. </h1>";
    }
} else {
    echo "<h1> No product selected. </h1>";
}

?>
    
</body>
</html>

