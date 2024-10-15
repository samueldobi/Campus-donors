<?php 


function logout_now(){
    session_start();

    session_unset();
   
    session_destroy();
   
 
}

// THE POST['EXECUTEFUNCTION IS THE NAME ASSIGNED TO THE LOGOUT BUTTON IN THE HTML FILE']
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['executeFunction'])) {
    logout_now();
    header("Location:/blood-donation-application/index.php");
    die();
}
