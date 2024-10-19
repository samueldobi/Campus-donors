<?php

require_once '../config_session.php';
require_once '../dbh.inc.php';

$user_id = $_SESSION["user_id"];

try {
    $stmt = $pdo->prepare('SELECT profile_picture FROM users WHERE id = :id');
    $stmt->execute(['id' => $user_id]);
    $user = $stmt->fetch();

    if ($user) {
        $profile_picture = $user['profile_picture'];
    } else {
        // Handle the case where the user is not found
        $profile_picture = 'path/to/default/profile_picture.jpg';
    }
} catch (PDOException $e) {
    echo 'Query failed: ' . $e->getMessage();
}



// function display_profile_pic(){
//     global $user_id; // Declare the global variable inside the function

//     $sql = "SELECT profile_picture FROM users WHERE id = 36";
//     $stmt = $pdo ->prepare($sql);
//     $stmt -> bindParam(":profile_picture", $user_id);
//     $stmt -> execute();

//     $result =  $stmt -> fetch(PDO::FETCH_ASSOC);
//     return $result;
//     echo $user_id;
// }