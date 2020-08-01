<html>
    <head>
        <title>BTrack</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    </head>
        <link rel="stylesheet" href="main.css" type="text/css">
        <?php 
        session_start();
        ?>
    <body>
    <div class="modal fade" id="bugmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Get in touch!</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <form id="bugresolveform" action="feedback.php" method="POST">
                        <div class="form group">
                            <label for="summary">Feedback</label>
                            <textarea name="summary" id="summary" class="form-control"></textarea>
                        </div>
                        <div class="form-group" style="padding-top:10px">
                        <button type="submit" class="btn btn-primary">Send</button>
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <?php    if(isset($_SESSION['user_id'])) { ?>
                    <li class="nav-item"><a class="nav-link" href="#"><?php echo $_SESSION['user']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
               <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="#loginModal" data-toggle="modal">Sign up</a></li>
                    <li class="nav-item"><a class="nav-link" href="#loginModal" data-toggle="modal">Login</a></li>  
                <?php } ?>  
                </ul>
            </div>
        </nav>
        <header class="page-header header container-fluid">   
            <div class="container">
                <div class="description">
                    <h4>Any query? Get in touch!</h4>
                    <button class="btn btn-lg" data-toggle="modal" data-target="#bugmodal">Feedback</button>
                </div>
            </div> 
        </header>
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src='main_load.js'></script>
        </body>
       
</html>