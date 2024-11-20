<?php

// $host = 'localhost';
// $dbname = 'blood_donation_App';
// $dbusername = 'root';
// $dbpassword = ''; // Add your password here if required

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connected successfully";
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
// }
class Database {
    private static $pdo = null;
    
    public static function getConnection() {
        if (self::$pdo === null) {
            $host = 'localhost';
            $dbname = 'blood_donation_App';
            $dbusername = 'root';
            $dbpassword = '';
            
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}
