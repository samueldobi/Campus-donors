<?php
require_once '../includes/dbh.inc.php';
try{


    function countDonors(){
        // require_once '../includes/dbh.inc.php';
        // $pdo = new PDO('mysql:host=localhost;dbname=blood_donation_app', $dbusername, $dbpassword);
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM donor");
        $stmt->execute();
        $count = $stmt->fetchColumn();
        echo  $count;
    }
    function countRecipients(){
        // require_once '../includes/dbh.inc.php';
        // $pdo = new PDO('mysql:host=localhost;dbname=blood_donation_app', $dbusername, $dbpassword);
        // $stmt = $pdo->prepare("SELECT COUNT(*) FROM recipients");
        // $stmt->execute();
        // $count = $stmt->fetchColumn();
        // echo  $count;
        // echo 'testing';
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM recipients");
        $stmt->execute();
        $count = $stmt->fetchColumn();
        echo  $count;
    }

    function countPending(){
        $pdo = Database::getConnection();
        $rec = $pdo->prepare("SELECT COUNT(*) FROM recipients");
        $rec->execute();
        $recCount = $rec->fetchColumn();
        $donor = $pdo->prepare("SELECT COUNT(*) FROM donor");
        $donor->execute();
        $donorCount = $donor->fetchColumn();

        $total = $donorCount - $recCount;
        echo $total;
    }
    function countUsers(){
        $pdo = Database::getConnection();
        $rec = $pdo->prepare("SELECT COUNT(*) FROM recipients");
        $rec->execute();
        $recCount = $rec->fetchColumn();
        $donor = $pdo->prepare("SELECT COUNT(*) FROM donor");
        $donor->execute();
        $donorCount = $donor->fetchColumn();

        $total = $donorCount + $recCount;
        echo $total;
    }
    }

   catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
}
    $pdo = null;

?>