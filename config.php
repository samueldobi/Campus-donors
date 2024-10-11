<?php
session_start();

// DATABASE INITIALIZATION
$host = 'localhost';
$dbname = 'blood_donation_app';
$username = 'iyke';
$password = "Madeofsteel";

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
