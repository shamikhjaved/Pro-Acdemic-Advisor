<?php
session_start(); // start session

// check if user is logged in
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // redirect to login page
  header('Location: login_index.php');
  exit;
}
?>

<!-- dashboard HTML code here -->
<h1>Welcome, <?php echo $_SESSION['email']; ?>!</h1>
<p>You are now logged in.</p>
<a href="logout.php">Logout</a>
