<?php
require_once 'config.php';

session_unset();
session_destroy();
redirectTo('login.php');
?>