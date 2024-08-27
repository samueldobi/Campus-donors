<?php
require_once 'config.php';

// session_unset();
// session_destroy();
// redirectTo('login.php');
session_start();
session_destroy();
header("Location: index.php");
exit();
?>