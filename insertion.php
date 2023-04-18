<?php
include('connection.php');


$name= $_POST['text'];
$email= $_POST['email'];
$cnumber= $_POST['number'];



$sql= "INSERT INTO signup (fullname,email,cnumber) values ('$name','$email', '$cnumber')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>