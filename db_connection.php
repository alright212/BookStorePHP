<?php

$serverName = "localhost";
$userName = "root";
$password = "";

# database name
$db_name = "online_book_store_db";

/**
 * creating database connection
 * useing The PHP Data Objects (PDO)
 **/
try {
    $conn = new PDO("mysql:host=$serverName;dbname=$db_name",
        $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}