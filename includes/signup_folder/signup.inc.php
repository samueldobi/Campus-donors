<?php 


// THIS IF STATEMENT CHECKS IF THE USER CLICKED ON THE SUBMIT BUTTON ON THE HTML FORM
if ( $_SERVER["REQUEST_METHOD"] === "POST"){
    $username =  $_POST['username'];
    $pwd =  $_POST['pwd'];
    $email =  $_POST['email'];

    // REQUIRE THE NECCESARY FILES
    require_once './dbh.inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_control.inc.php';

    // ERROR HANDLERS

    //CREATE USER FUNCTION




}