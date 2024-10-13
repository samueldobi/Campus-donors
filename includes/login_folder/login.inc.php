<?php 


// THIS IF STATEMENT CHECKS IF THE USER CLICKED ON THE SUBMIT BUTTON ON THE HTML FORM
if ( $_SERVER["REQUEST_METHOD"] === "POST"){
    $username =  $_POST["username"];
    $pwd =  $_POST["password"];

    try {

        require_once '../dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_control.inc.php';

    // ERROR HANDLERS
    $errors = [];
    if (is_input_empty($username, $pwd)){
        $errors["empty_input"] = "Fill in all inputs";
    }

    // GET THE USERS 
    $result = get_user($pdo, $username);

    //IF USERNAME IS WRONG
    if(is_username_wrong($result)){
        $errors["login_incorrect"] = "incorrect login info";
    }

    // IF USERNAME IS CORRECT AND PASSWORD IS WRONG
    if(!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])){
        $errors["login_incorrect"] = "incorrect login info";
    }


    //WE REQUIRE THE CONFIG FILE TO MAKE USE OF THE SESSION START FUNCTION
    
    require_once '../config_session.php';

    //FUNCTION TO HANDLE IF ERRORS ARE NOW SHOWN
    if ($errors){
        $_SESSION["errors_login"] = $errors;
        header("Location:../login_folder/login_error_page.php");
        die();
    }
    // if (!$errors){
    //     header("Location:../../index.php?login=success");
    // }

    // WE DONT KNOW YET
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $result["id"];
    session_id($sessionId);
    $_SESSION["user_id"] = $result["id"];
    $_SESSION["user_username"] = htmlspecialchars($result["username"]) ;
    $_SESSION["last_regeneration"] = time();
    // header("Location:.../../index.php?login=success");
    $pdo = null;
    $stmt = null;
    die();
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
    }
}  else {
    header("Location:../index.php");
    die();
}