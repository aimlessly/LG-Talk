<?php
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">

<style type="text/css">
      body {
        padding-top: 32px;
        padding-bottom: 22px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1216px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>

<head>
<title>LG Talk Home</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="content-language" content="th" /> 
<style type= "text/css">
</style>
</head>

<body>

    <div class="container">

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Welcome to LG Talk!</h1><br>
        <h3 class="muted">Login as AIM</h3><br><br>
        <a class="btn btn-large btn-success" href="Logout.php">Log out</a>
      </div>

      <div class="masthead">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#">Contact</a></li>
                <li><a href="#">Manage Contact</a></li>
                <li><a href="#">Manage Group</a></li>                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
      <hr>
    </div> <!-- /container -->


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>