<?php

require_once '../dbh.inc.php';
require_once '../config_session.php';

$user_id = $_SESSION["user_id"];

function display_name(){
    global $user_id; // Declare the global variable inside the function

    // $sql = "SELECT profile_picture FROM users WHERE id = 36";
    // $stmt = $pdo ->prepare($sql);
    // $stmt -> bindParam(":profile_picture", $user_id);
    // $stmt -> execute();

    // $result =  $stmt -> fetch(PDO::FETCH_ASSOC);
    // return $result;
    echo $user_id;
}