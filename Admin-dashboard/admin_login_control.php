<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    try{
        require_once '../includes/dbh.inc.php';

    header("Location:admin.php");

    }catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
    }
        $pdo = null;
}

?>