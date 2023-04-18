<?php
session_start(); // start session

// check if form is submitted
if(isset($_POST['submit'])) {
  // get user input
  $email = $_POST['email'];
  $password = $_POST['password'];

  // connect to database (example only, replace with your own db connection code)
  $conn = mysqli_connect('localhost', 'root', '', 'proacademic');

  // validate user input (example only, not secure!)
  $sql = "SELECT * FROM login WHERE username='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) == 1) {
    // set session variables
    $user = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $user['email'];
    $_SESSION['loggedin'] = true;
    // redirect to dashboard page
    header('Location: index.php');
    exit;
  } else {
    // display error message
    echo 'Invalid email or password.';
  }
}
?>
