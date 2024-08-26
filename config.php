<?php
session_start();

// DATABASE INITIALIZATION
$host = 'localhost';
$username = 'iyke';
$password = "Madeofsteel";
$dbname = 'blood_donation_app';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// $location = 'index.php';

function redirectTo($location) {
    header("Location: $location");
    exit;
}
?>