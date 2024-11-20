<?php 


// THIS IF STATEMENT CHECKS IF THE USER CLICKED ON THE SUBMIT BUTTON ON THE HTML FORM
if ( $_SERVER["REQUEST_METHOD"] === "POST"){
    $username =  $_POST["username"];
    $email =  $_POST["email"];
    $pwd =  $_POST["password"];



    try {
         // REQUIRE THE NECCESARY FILES
    require_once '../dbh.inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_control.inc.php';
    $pdo = Database::getConnection();

    // ERROR HANDLERS
    $errors = [];
    if (is_input_empty($username, $pwd, $email)){
        $errors["empty_input"] = "Fill in all inputs";
    }
    if (is_email_invalid($email)){
        $errors["invalid_email"] = "Invalid email used";
 
    }
    if (is_username_taken( $pdo,  $username)){
        $errors["username_taken"] = "Username already taken";

    }
    if (is_email_registered( $pdo, $email)){
        $errors["email_used"] = "Email already registered";

    }
    //WE REQUIRE THE CONFIG FILE TO MAKE USE OF THE SESSION START FUNCTION
    
    require_once '../config_session.php';
    //FUNCTION TO HANDLE IF ERRORS ARE NOW SHOWN
    if ($errors){
        $_SESSION["errors_signup"] = $errors;
        header("Location: signup_error_page.php");
        die();
    }
    // NOW WE CREATE THE ACTUAL USER
    create_user($pdo, $username, $pwd, $email);

    // header("Location:../../index.php?signup=success");
    if (!$errors){
        $_SESSION["errors_signup"] = $errors;
        header("Location: signup_error_page.php");
        die();
    }
    $pdo = null;
    $stmt = null;
    die();


    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
    }
   
}else{
    header("Location:.../index.php");
    die();
}