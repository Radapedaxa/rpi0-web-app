<?php
// db.php - Centralized Data Tier Connection
$host = 'localhost';     // Keep this as localhost
$db   = 'project_db';    // The name of the database you create in MySQL
$user = 'root';          // The default administrative user for MariaDB/MySQL
$pass = '123456'; // Put your global software password here
try {
    // Establish a secure, persistent connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Configure PDO to throw immediate errors if an SQL query fails
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If the database crashes or credentials fail, stop the app immediately
    die("Database connection error: " . $e->getMessage());
}
?>