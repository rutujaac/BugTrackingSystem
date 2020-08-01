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
$email = $_POST["email1"];
$passw = $_POST["passw1"];

$sql = "SELECT user_id,name from user_info where email='$email' and passw='$passw'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $row['name'];
    $_SESSION['user_id'] = $row['user_id'];
    header("Location:dashboard.php");
}
else
{
    header("Location:index.php?error=2");
}

?>