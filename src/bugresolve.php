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
$bug_id = $_COOKIE['bug_id'];
$solution = $_POST["solution"];
$summary = $_POST["summary"];
$dt = date("Y-m-d H:i:s");

$sql = "INSERT INTO bug_solutions (user_id,bug_id,solution,summary,date) values ('$user','$bug_id'
,'$solution','$summary','$dt')";

if(mysqli_query($conn,$sql)==TRUE) {
    header("Location:allbugs.php?bugreporterror=1");
}
else
{
    header("Location:allbugs.php?bugreporterror=2");
  
}