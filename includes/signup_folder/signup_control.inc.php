<?php 

declare(strict_types=1);

function is_input_empty(string $username, string $password , string $email){
    // empty is a built in php function
    if(empty($username || empty($password) || empty($email))){
        return true;
    }else {
        return false;
    }
}
function is_email_invalid( string $email){
    // filter_var is another built-in function with various methods for different purposes
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else {
        return false;
    }
}
function is_username_taken(object $pdo,  string $username){
    //this function is attached to the model file and it checks if the username is already taken
    if(get_username( $pdo,  $username)){
        return true;
    }else {
        return false;
    }
}
function is_email_registered(object $pdo,  string $email){
    //this function is attached to the model file and it checks if the email is already registered
    if(get_email( $pdo,  $email)){
        return true;
    }else {
        return false;
    }
}