<?php
$host = "sql302.epizy.com";   // Replace with your host
$user = "if0_40761372";   // Replace with your DB username
$pass = "KK19AeZHMaD72b";   // Replace with your DB password
$dbname = "if0_40761372_zesty_bar_db";     // Replace with your DB name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
