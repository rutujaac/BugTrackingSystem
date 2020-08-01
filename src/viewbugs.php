<html>
<head>
<title>BTrack</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    </head>
        <link rel="stylesheet" href="main.css" type="text/css">
        <style>
            .header {
    background-image: url(bg_login.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
        </style>
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
?>

</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top">
<a class="navbar-brand" href="#">BTrack</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar">
    Expand<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="mainnavbar">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo $_SESSION['user']; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
</div>
</nav>
<header class="page-header header container-fluid">
    <div class="container d-flex h-50">
    <div class="row justify-content-center align-self-center">
    <table class="table table-striped">
    <?php
$user = $_SESSION['user_id'];
$sql = "SELECT * from bug_details where user_id='$user'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){ 
            echo "<tr>";
                echo "<th>Bug Name</th>";
                echo "<th>Bug Type</th>";
                echo "<th>Severity</th>";
                echo "<th>Feature</th>";
                echo "<th>Environment</th>";
                echo "<th>Summary</th>";
                echo "<th>Date</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['bug_name'] . "</td>";
                echo "<td>" . $row['bug_type'] . "</td>";
                echo "<td>" . $row['severity'] . "</td>";
                echo "<td>" . $row['feature'] . "</td>";
                echo "<td>" . $row['environment'] . "</td>";
                echo "<td>" . $row['summary'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        header("Location:dashboard.php?error=3");
    }
}
else
{
    header("Location:dashboard.php?error=2");
} ?>
    </div>
    </div>
</header>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src='main_load.js'></script>
</body>
</html>