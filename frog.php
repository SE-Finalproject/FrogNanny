<!DOCTYPE html>
<?php
    require_once('dbconnect.php');
    $sql = " SELECT * FROM `frogrecord` WHERE `family` = '樹蛙科'  ";
    $result = mysqli_query($conn , $sql)
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Frog Nanny's Web</title>
    <!-- <script type="text/javascript" src="../javascript2.0/login.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="../css2.0/login.css">
    <link rel="stylesheet" type="text/css" href="../css2.0/Home_new.css"> -->
    <style>
        /* header背景圖片 */
        .header {
            background-image: url("../img/i3.jpg");
            text-align: center;
            background-size: cover;
        }
    </style>
</head>
<body>
<!-- <div class="header"><h2>Flog Nanny</h2>
    <div class="navbar" id="navbar">
      <ul>
          <li><a href="Blog_layout.html">Home</a></li>
          <li>
              <div class="dropdown">
                <button class="dropbtn">物種
                </button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="frog.html">青蛙</a>
                  <a href="butterfly.html">蝴蝶</a>
                </div>
              </div> 
          </li>
          <li><a href="#">Photo</a></li>
          <li><a href="#">Search</a></li>
          <li class="logout"><a href="#" onclick="showLoginDiv()"><span>&#8998;</span>Log out</a></li>
      </ul>
    </div>
    
</div>

<div>

<div id="login_div" class="login_div">
  <form class="modal-content animate" action="../loginControl.php" method="POST">
    <input type="hidden" name="act" value="login">
    <div class="topcontainer">
      <span onclick="closeLoginDiv()" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container first">
        <div class="login_input">
          <span class="login_input_icon">Username</span>
          <input type="text" placeholder="Enter Username or Email" name="userID" required>
        </div>
        <div class="login_input">
          <span class="login_input_icon">Password</span>
          <input type="password" placeholder="Enter Password" name="password" required>
        </div>
        
      <button type="submit" class="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="closeLoginDiv()" class="cancelbtn">Cancel</button>
      <span class="password">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div> -->

<div class="header py-5">
    <h1 class="py-5">Frog</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container">
  <a class="navbar-brand" href="Blog_layout.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          物種
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="frog.html">青蛙</a>
          <a class="dropdown-item" href="butterfly.html">蝴蝶</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Photo</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-9 mb-sm-3">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">樹蛙科</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">蟾蜍科</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">赤蛙科</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                  <?php
                        while($rs = mysqli_fetch_array($result)){
                            echo "<div class='col-md-6 mb-2'>",
                                 "<div class='card' style='width: 20rem'>",
                            "<div class='text-center'>",
                                "<img style='width: 85%;' class='card-img-top' src='http://www.ellison.idv.tw/www/Gallery/2007/20071127/15.jpg' alt='Card image cap'>",   
                            "</div>",
                            
                          "<div class='card-body'>",
                            "<h4 class='card-title'>", $rs['species'] ,"</h4>",
                            "<p class='card-text'>科別: ", $rs['family'] ,"</p>",
                            "<p class='card-text'>屬種: ", $rs['genus'] ,"</p>",
                            "<p class='card-text'>特徵: ", $rs['info'] ,"</p>",
                            "<p class='card-text'>棲息地: ", $rs['place'] ,"</p>",
                            "<a href='#' class='btn btn-primary'>Go somewhere</a>",
                            "　　　　",
                            "<a href='editFrog.php?id=",$rs['id']," 'class='btn btn-primary'>修改</a>",
                          "</div>", 
                        "</div>",
                      "</div>";
                        }
                    
                    ?>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">海蟾蜍</h4>
                        <p class="card-text">特徵: 大大的</p>
                        <p class="card-text">棲息地: 海海的</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">金線蛙</h4>
                        <p class="card-text">特徵: 金金的</p>
                        <p class="card-text">棲息地: 水水的</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3">
            <h2>About Me</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p style="height:300px;">Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim..</p>
        </div>
    </div>
</div>

    <!-- <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div> -->
    <!-- <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div> -->
  </div>
</div>
<!-- <script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("navbar");
    // var row = document.getElementById("row");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
</script>-->
<div class="footer">
  <h2>Footer</h2>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>

