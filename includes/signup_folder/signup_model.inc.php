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
// FUNCTION TO REGISTER THE USER IN THE DATABASE
function set_user(object $pdo,  string $username, string $pwd,  string $email){
    $query = "INSERT INTO users (username, pwd, email) VALUES(:username, :pwd, :email)";
    $stmt = $pdo ->prepare($query);
        // function to hash password
        $options = [
            'cost' => 12
        ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    $stmt -> bindParam(":username", $username);
    $stmt -> bindParam(":pwd", $hashedPwd);
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

}