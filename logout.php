<?php
session_start(); // start session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to login page
header('Location: login_index.php');
exit;
?>
