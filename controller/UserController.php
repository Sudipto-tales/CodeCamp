<?php
require 'database.php';

$db = new Database();

// Insert data into the 'products' collection
$productData = [
    'product_name' => 'Laptop',
    'price'        => 50000,
    'stock'        => 10,
    'added_at'     => new MongoDB\BSON\UTCDateTime()
];

echo $db->insertData('products', $productData);
?>
