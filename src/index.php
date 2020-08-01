<html>
    <head>
        <title>BTrack</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    </head>
        <link rel="stylesheet" href="main.css" type="text/css">
        <?php 
        session_start();
        if(isset($_GET['error']) && $_GET['error'] == "1") {
            echo '<script type="text/javascript">alert("Error occured, try again"); </script>';
        }
        else if(isset($_GET['error']) && $_GET['error'] == "2") {
            echo '<script type="text/javascript">alert("Incorrect username or password"); </script>';
        }
        else if(isset($_GET['register']) && $_GET['register'] == "1") {
            echo '<script type="text/javascript">alert("Succesfully registered, please login again"); </script>';
        }
        ?>

        <script>
            function user_validate() {
                
                let name = document.forms["signupform"].name2.value;
                let email = document.signupform.email2.value;
                let passw = document.signupform.passw2.value;
                if(name == "" || email == "" || passw == "") {
                    alert("Please fill all the fields");
                    return false;
                }
            }
        </script>
    <body>

            <div class="modal fade" role="dialog" id="loginModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                                <ul class="nav nav-tabs">
                                        <li class="active"><a  href="#loginmodal1" data-toggle="tab"><h4>Login</h4></a></li>
                                        
                                        <li class="nav-item"><a  href="#signupmodal" data-toggle="tab"><h4>Sign up</h4></a></li>
                                </ul>
                            <div class="tab-content">        
                            <div class="tab-pane active" role="tabpanel" id="loginmodal1">
                            <form id="loginform" method="POST" action="login.php">
                                <div class="form-group">
                                <input type="text" class="form-control" id="email1" name="email1" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="passw1" name="passw1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn button">
                            </div>
                            </form>
                           
                        </div>
                        <div class="tab-pane" id="signupmodal">
                                <form name="signupform" id="signupform" method="POST" action="register.php" onsubmit="return user_validate()">
                                        <div class="form-group">
                                                <input type="text" class="form-control" id="name2" name="name2" placeholder="Name">
                                            </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" id="email2" name="email2" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="passw2" name="passw2" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Sign up" class="btn button">
                                    </div>
                                    </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <div class="signup-section">Not a member yet?
                                <a href="#">Sign up</a>.
                            </div>
                        </div>  
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
                    <li class="nav-item"><a class="nav-link" href="#loginModal" data-toggle="modal">Sign up</a></li>
                    <li class="nav-item"><a class="nav-link" href="#loginModal" data-toggle="modal">Login</a></li>    
                </ul>
            </div>
        </nav>
        <header class="page-header header container-fluid">   
            <div class="container">
                <div class="description">
                    <h2>Finding it hard to manage bugs in your software efficiently?</h2>
                    <p>BTrack helps you to manage your projects while collaborating with your teammates with ease.</p>
                    <button class="btn btn-outline-secondary btn-lg" data-toggle="modal" data-target="#loginModal">Get Started</button>
                </div>
            </div> 
        </header>
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src='main_load.js'></script>
        </body>
       
</html>