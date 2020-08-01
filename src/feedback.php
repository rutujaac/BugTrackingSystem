<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "BugTrack";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);


// Check connection
if ($conn->connect_error) {
    header("Location:dashboard.php?error=1");
}


$summary = $_POST["summary"];
$dt = date("Y-m-d H:i:s");

$sql = "INSERT INTO feedback(feedback,date) values ('$summary','$dt')";

if(mysqli_query($conn,$sql)==TRUE) {
    ?>
   <script> alert("Feedback submitted"); </script>";
   <?php
   header("Location:contact.php");
}
else
{
    ?>
   <script> alert("Error occured, try again"); </script>";
   <?php
   header("Location:contact.php");
  
}

?>