<?php
    session_start();
    //set the login mark to empty
    $_SESSION['uID'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/view.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title>Frog Nanny's Web</title>
    <script type="text/javascript" src="../javascript/login.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <p class="logo">Frog Nanny</p>
            <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="login"><a href="#" id="login_a"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
                <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> -->
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="log" align="center">
            <form method="post" action="../loginControl.php" id="login_form">
                <input type="hidden" name="act" value="login">
                <div class="login_input">
                  <span class="login_input_icon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="userID" type="text" class="form-control" name="userID" placeholder="Account">
                </div>
                <div class="login_input">
                  <span class="login_input_icon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br>
                <button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;
                <a class="dropdown-item" href="#">New around here? Sign up</a>&nbsp;&nbsp;
                <a class="dropdown-item" href="#">Forgot password?</a>
              </form>
        </div>
    </div>
</body>
</html>