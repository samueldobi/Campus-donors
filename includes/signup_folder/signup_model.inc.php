<?php 

declare(strict_types=1);

function get_username(object $pdo, string $username){
    //this query selects the username from the database
    $query = "SELECT username FROM  users WHERE username =:username;";
    //this statement seperates the query from the statement variable, this prevents sql injection
    $stmt = $pdo ->prepare($query);
    $stmt -> bindParam(":username", $username);
    $stmt -> execute();

    $result =  $stmt -> fetch(PDO::FETCH_ASSOC);
    return $result;
}

// FUNCTION TO QUERY THE EMAIL FROM THE DATABASE AND CHECK IF IT IS ALREADY TAKEN
function get_email(object $pdo, string $email){
    $query = "SELECT username FROM  users WHERE email =:email; ";
    $stmt = $pdo ->prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $result =  $stmt -> fetch(PDO::FETCH_ASSOC);
    return $result;
}