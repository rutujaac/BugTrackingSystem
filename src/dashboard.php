<html>
    <head>
        <title>BTrack</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    </head>
        <link rel="stylesheet" href="main.css" type="text/css">
        <?php session_start(); 
        if(isset($_GET['error']) && $_GET['error'] == "2") {
            echo '<script type="text/javascript">alert("Error occured, try again"); </script>';
        }
        else if(isset($_GET['bugreport']) && $_GET['bugreport'] == "1") {
            echo '<script type="text/javascript">alert("Bug report succesfully submitted"); </script>';
        }
        else if(isset($_GET['error']) && $_GET['error'] == "3") {
            echo '<script type="text/javascript">alert("You have not submitted any issues yet"); </script>';
        }
        ?>
</head>
<body>
    <div class="modal fade" id="bugmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bug Details</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <form id="bugform" action="bugreport.php" method="POST">
                        <div class="form group">
                            <label for="bugname">Bug Name:</label>
                            <input type="text" name="bugname" id="bugname" class="form-control">
                        </div>
                        <div class="form group">
                            <label for="bugtype">Bug Type:</label>
                            <input type="text" name="bugtype" id="bugtype" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="severity">Severity</label>
                        <select class="form-control" name="severity" id="severity">
                        <option>Critical</option>
                        <option>Major</option>
                        <option>Trivial</option>
                        <option>Low</option>
                        </select>
                        </div>
                        <div class="form group">
                            <label for="feature">Feature:</label>
                            <input type="text" name="feature" id="feature" class="form-control">
                        </div>
                        <div class="form group">
                            <label for="os">OS:</label>
                            <input type="text" name="os" id="os" class="form-control">
                        </div>
                        <div class="form group">
                            <label for="summary">Summary:</label>
                            <textarea name="summary" id="summary" class="form-control"></textarea>
                        </div>
                        <div class="form-group" style="padding-top:10px">
                        <button type="submit" class="btn btn-primary">Submit Details</button>
                        </div>
                    </form>
                </div>
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
        </div>
    </div>
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
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-4 mx-auto">
                    <button type="button" class="btn btn-lg" data-toggle="modal" href="#bugmodal">New Issue</button><br/>
                    <h5 class="mt-2">Post a new issue</h5>
                </div>
                <div class="col-4 mx-auto">
                    <a href="viewbugs.php"><button type="button" class="btn btn-lg">My Issues</button></a><br/>
                    <h5 class="mt-2">See your posted issues</h5>
                </div>
                <div class="col-4 mx-auto">
                    <a href="allbugs.php"><button type="button" class="btn btn-lg">All Issues</button></a><br/>
                    <h5 class="mt-2">See all the issues</h5>
                </div>
            </div> 
            </div> 
        </header>
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src='main_load.js'></script>
</body>