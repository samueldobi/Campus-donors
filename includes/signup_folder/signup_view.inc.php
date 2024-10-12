<?php 

declare(strict_types=1);

function check_errors(){
    if(isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo '<br>';
        foreach ($errors as $error) {
           echo '<p class = "form-error" >' . $error .'</p>';
        }
        echo '<a href = "../../index.php"> Go to Home Page</a>';

        unset($_SESSION["errors_signup"]);
    } else {
        echo '<p class = "form-success">'.'Signup Succesful'. '</p>';
        echo '<a href = "../../index.php"> Go to Home Page</a>';
    }
}