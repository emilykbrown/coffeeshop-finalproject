<?php

$host = "172.237.152.200";
$dbName = "coffeeshop-db";
$userName = "dbadmin";
$password = "dbadmin";

try {
    // Establishing the PDO connection
    $con = new PDO("mysql:host={$host};dbname={$dbName}", $userName, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    // If an error occurs, catch the exception and display an error message
    die("Connection failed: " . $e->getMessage());
}
?>