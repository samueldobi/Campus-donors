<?php 


// THIS IF STATEMENT CHECKS IF THE USER CLICKED ON THE SUBMIT BUTTON ON THE HTML FORM
if ( $_SERVER["REQUEST_METHOD"] === "POST"){
    $username =  $_POST["username"];
    $email =  $_POST["email"];
    $pwd =  $_POST["password"];

    try {

        require_once '../dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

    // ERROR HANDLERS
    $errors = [];
    if (is_input_empty($username, $pwd)){
        $errors["empty_input"] = "Fill in all inputs";
    }

    //WE REQUIRE THE CONFIG FILE TO MAKE USE OF THE SESSION START FUNCTION
    
    require_once '../config_session.php';

    //FUNCTION TO HANDLE IF ERRORS ARE NOW SHOWN
    if ($errors){
        $_SESSION["errors_signup"] = $errors;
        header("Location: signup_error_page.php");
        die();
    }

    // WE DONT KNOW YET
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $result["id"];
    session_id($sessionId);
    $_SESSION["user_id"] = $result["id"];
    $_SESSION["user_username"] = htmlspecialchars($result["username"]) ;
    $_SESSION["last_regeneration"] = time();
    header("Location:../index.php?login=success");
    $pdo = null;
    $stmt = null;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
    }
}  else {
    header("Location:../index.php");
    die();
}