<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<style type="text/css">
			#chart-container {
/*
				width: auto;
				height: auto;
*/
			}
		</style>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">sahand<span class="teal-text"></span><span class="red-text">SADRI</span></a>
      

     
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-lighten-2">Expense Tracker</h1>
        <div class="row center">
          <h5 class="header col s12 light">What are you really spending your money on?</h5>
        </div>
        <div class="row center">
          <a href="#" id="download-button" class="btn-large waves-effect waves-light green lighten-1">Add an Expense</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="StLouis.jpg" class="responsive-img" alt="Unsplashed background img 1"></div>
  </div>
    <div class="container">
        <div class="row center-align">
    
        <div id="chart-container" class="col s6">
                    <canvas id="mycanvas"></canvas>
        </div>
    
   
        <div id="chart-container" class="col s6">
                    <canvas id="mycanvas2"></canvas>
        </div>

        </div>
    </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">About</h5>

            <p class="light">This expense tracker was created to give you a completely free way of tracking what you're actually spending your money on. Whether you're spending most of your money on rent or leisure this application will specify exactly where your hard earn money is going.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Developer</h5>

            <p class="light">Some call him a legend, most call him Sahand. He is the creator of this illustruous website. He is currently a Web Developer at the University of Missouri and hails from the heart of America otherwise known as St. Louis Missouri. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">Your expense history will be listed right above this, but you already knew that. To add an expense its as easy as clicking "ADD AN EXPENSE" above and filling out the form.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  




  <footer class="page-footer red">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Short Bio</h5>
          <p class="grey-text text-lighten-4">This web application was created for my Hack Week Project for CS 4830 Advanced Web Development.</p>


        </div>
        
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="#">Sahand Sadri</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script
          src="https://code.jquery.com/jquery-1.12.3.js"
          integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="
          crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
		<script type="text/javascript" src="app.js"></script>

  </body>
</html>
