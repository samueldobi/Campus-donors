<?php 

declare(strict_types=1);

// CHECK IF THE INPUT IS EMPTY
function is_input_empty(string $username, string $pwd){
    if( empty($username) || empty($pwd)){
        return true;
    }else {
        return false;
    }
}

// CHECK IF THE USERNAME IS WRONG
function is_username_wrong(bool|array $result){
    if(!$result){
        return true;
    } else{
        return false;
    }
}
// CHECK IF THE PASSWORD IS WRONG
function is_password_wrong(string $pwd, string $hashedPwd){
    if(!password_verify($pwd, $hashedPwd)){
        return true;
    } else{
        return false;
    }
}