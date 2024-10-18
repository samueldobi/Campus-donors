<?php 

declare(strict_types=1);

function output_username(){
    // THIS IF FUNCTION IS FOR IF THE USER IS LOGGED IN
    if (isset($_SESSION["user_id"])) {
        echo  $_SESSION["user_username"] ;
    }else {
        echo "Not logged in yet" ;
    }
}
function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo '<br>';
        foreach ($errors as $error) {
            echo '<p class = "form-error">' .$error . '</p>';
            echo '<a href = "../../index.php"> Back to Home Page</a>';
        }

        unset($_SESSION["errors_login"]);
    }else if(isset($_GET['login']) && $_GET['login']=== "success") {
        echo '<br>';
        echo '<p class ="form-success">Login Success</p>';
        // echo $_SESSION["user_username"];
    }
}
function output_id(){
    if (isset($_SESSION["user_id"])){
        echo $_SESSION["user_id"];
    }
}