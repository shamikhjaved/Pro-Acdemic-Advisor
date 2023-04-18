<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proacademic";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if the form has been submitted
if (isset($_POST['id'])) {
  // get the form data
  $id = $_POST['id'];
  $name = $_POST['username'];
  $age = $_POST['password'];

  // update the database
  $sql = "UPDATE login SET username='$name', password='$age' WHERE id='$id'";
  mysqli_query($conn, $sql);

  // redirect to the previous page
  header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>