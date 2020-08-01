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
    header("Location:index.php?error=1");
}
$email = $_POST["email2"];
$nm = $_POST["name2"];
$passw = $_POST["passw2"];

$sql = "INSERT INTO user_info (name,email,passw) values ('$nm','$email','$passw')";
if(mysqli_query($conn,$sql)==TRUE) {
    $_SESSION['user'] = $nm;
   header("Location:index.php?register=1");
}
else
{
    header("Location:index.php?error=1");
}

?>