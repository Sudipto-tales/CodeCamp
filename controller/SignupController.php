<?php
require 'vendor/autoload.php'; // Load Composer's autoloader

// MongoDB connection
$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->selectDatabase('sudipto'); // Replace with your database name
$collection = $db->selectCollection('users'); // Replace with your collection name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass = md5($password);
// Example user data to insert
    $userData = [
    'first_name' => $name,
    'email' => $email,
    'password' => $pass,
    'status' => "active",
    'auth_stamp' => date("Y-m-d H:i:s") 
];
}
// Insert user data into MongoDB
try {
    $insertResult = $collection->insertOne($userData);
    echo "User information stored successfully. Inserted ID: " . $insertResult->getInsertedId();
} catch (Exception $e) {
    echo "Error storing user information: " . $e->getMessage();
}
?>
