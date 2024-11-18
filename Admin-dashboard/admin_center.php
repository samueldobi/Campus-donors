<?php
declare(strict_types=1);
require_once '../dbh.inc.php';

function getDonors(object $pdo, string $name){
    $query = "SELECT name FROM donors WHERE name:=name;  ";
    $stmt = $pdo ->prepare($query);
    $stmt -> bindParam(":name", $name);
    $stmt -> execute();
    $result =  $stmt -> fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>