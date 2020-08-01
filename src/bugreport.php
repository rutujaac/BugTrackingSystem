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

$user = $_SESSION['user_id'];
$bugname = $_POST["bugname"];
$bugtype = $_POST["bugtype"];
$feature = $_POST["feature"];
$os = $_POST["os"];
$severity = $_POST["severity"];
$summary = $_POST["summary"];
$dt = date("Y-m-d H:i:s");

$sql = "INSERT INTO bug_details (user_id,bug_name,bug_type,severity,feature,environment,summary,date) values ('$user','$bugname'
,'$bugtype','$severity','$feature','$os','$summary','$dt')";

if(mysqli_query($conn,$sql)==TRUE) {
    header("Location:dashboard.php?bugreport=1");
}
else
{
    echo mysqli_error($conn);
  
}