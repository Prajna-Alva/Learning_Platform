<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en-us">
<!-- start here-->
<head>
<meta charset="utf-8">
<title>Learners Online Tutorials</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

<link rel="icon" type="image/png" href="mbdata:image/png;base64,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">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<div class="container-fluid clear-marg clear-pad">
		<header id="intro" class="row">
			<div class="col-sm-12 col-lg-6 clear-pad text-center text-lg-left">
	
			</div>
      <div id="slogan" class="d-none d-sm-block col-sm-12 col-lg-6 clear-pad text-sm-center text-lg-right">
		    	WELCOME LEARNERS
			</div>
    </header>
		
		<nav class="row navbar d-block">
      <i id="menu-btn" class="fa fa-bars d-inline-block d-md-none"></i>
      <a class="d-none d-md-inline-block" href="index.php"> HOME </a>
      <a class="d-none d-md-inline-block" href="htmlPage.html"> HTML </a>
      <a class="d-none d-md-inline-block" href="csspage.html"> CSS </a>
      <a class="d-none d-md-inline-block" href="about.html"> ABOUT US </a>
      <a class="float-right" href="#search"><i class="fa fa-search"></i></a>
      <a class="float-right" href="logout.php">LOGOUT</a>
    </nav>
		<main class="row">
      <div id="side-menu" class="d-none d-md-block col-3 col-lg-2">
        <h4>HTML and CSS</h4>
        <a class="row" href="htmlPage.html">Learn HTML</a>
        <a class="row" href="csspage.html">Learn CSS</a>
        <a class="row" href="colorcode.html">Learn Colors</a>
  

  
      </div>
      <div class="col-12 col-md-9 col-lg-10">
        <div class="row line">
          <div class="col-12 col-lg-6 box">
            <h1>HTML</h1>
            <p>The language for building web pages</p>
            <div class="btn grey-btn"><a href="htmlPage.html">LEARN HTML</a></div>
            <div class="btn grey-btn"><a href="htmlref.html">HTML REFERENCE</a></div>
          </div>
          <div class="col-12 col-lg-6 d-none d-sm-block box">
            <div class="grey-box text-left">
              <h3>HTML Example:</h3>
              <div class="code">
                <span class="blue"><</span><span class="brown">!DOCTYPE</span>
                <span class="red">html</span><span class="blue">></span>
                <br>
                <span class="blue"><</span><span class="brown">html</span><span class="blue">></span>
                <br>
                <span class="blue"><</span><span class="brown">title</span><span class="blue">></span>HTML Tutorial<span class="blue"><</span><span class="brown">/title</span><span class="blue">></span>
                <br>
                <span class="blue"><</span><span class="brown">body</span><span class="blue">></span>
                <br>
                <br>
                <span class="blue"><</span><span class="brown">h1</span><span class="blue">></span>This is a heading<span class="blue"><</span><span class="brown">/h1</span><span class="blue">></span>
                <br>
                <span class="blue"><</span><span class="brown">p</span><span class="blue">></span>This is a paragraph.<span class="blue"><</span><span class="brown">/p</span><span class="blue">></span>
                <br>
                <br>
                <span class="blue"><</span><span class="brown">/body</span><span class="blue">></span>
                <br>
                <span class="blue"><</span><span class="brown">/html</span><span class="blue">></span>
              </div>
              <div class="btn green-btn"><a href="editor/htmlCode.html">Try it Yourself <i class="fa fa-angle-double-right"></i></a></div>
            </div>
          </div>
        </div>
        <div class="row line grey-back d-lg-flex flex-lg-row-reverse">
          <div class="col-12 col-lg-6 box">
            <h1>CSS</h1>
            <p>The language for styling web pages</p>
            <div class="btn grey-btn"><a href="csspage.html">LEARN CSS</a></div>
           
          </div>
          <div class="col-12 col-lg-6 d-none d-sm-block box">
            <div class="text-left">
              <h3>CSS Example:</h3>
              <div class="code">
                <span class="brown">body</span>
                <span>{</span>
                <br>
                &nbsp;&nbsp;&nbsp;<span class="red">background-color:</span>
                <span class="mediumblue">#d0e4fe;</span>
                <br>
                <span>}</span>
                <br>
                <span class="brown">h1</span>
                <span>{</span>
                <br>
                &nbsp;&nbsp;&nbsp;<span class="red">color:</span>
                <span class="mediumblue">orange;</span>
                <br>
                &nbsp;&nbsp;&nbsp;<span class="red">text-align:</span>
                <span class="mediumblue">center;</span>
                <br>
                <span>}</span>
                <br>
                <span class="brown">p</span>
                <span>{</span>
                <br>
                &nbsp;&nbsp;&nbsp;<span class="red">font-family:</span>
                <span class="mediumblue">"Times New Roman";</span>
                <br>
                &nbsp;&nbsp;&nbsp;<span class="red">font-size:</span>
                <span class="mediumblue">20px;</span>
                <br>
                <span>}</span>
              </div>
              <div class="btn green-btn"><a href="editor/htmlCode.html">Try it Yourself <i class="fa fa-angle-double-right"></i></a></div>
            </div>
          </div>
        </div>

        <div class="row line grey-back">
          <div class="col-12 col-lg-4 box">
            <div class="white-box d-flex flex-column justify-content-center align-items-center">
              <h5>SQL</h5>
              <h4>A language for accessing databases</h4>
 
            </div>
          </div>
          <div class="col-12 col-lg-4 box">
            <div class="white-box d-flex flex-column justify-content-center align-items-center">
            <h5>PHP</h5>
            <h4>A web server programming language</h4>
           
            </div>
          </div>
          <div class="col-12 col-lg-4 box">
            <div class="white-box d-flex flex-column justify-content-center align-items-center">
            <h5>jQuery</h5>
            <h4>A JavaScript library for developing web pages</h4>
            
            </div>
          </div>
        </div>
        <div class="row line">
          <div class="col-12 col-lg-4 box">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <h5>CSS</h5>
              <h4>A modern CSS framework for faster and bettter responsive sites</h4>
              <div class="btn grey-btn"><a href="csspage.html">LEARN CSS</a></div>    
            </div>
          </div>
          <div class="col-12 col-lg-4 box">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <h5>Color Picker</h5>
              <a href="img/colorcode.PNG"><img id="color-picker" src="http://www.w3schools.com/colors/img_colormap.gif"></a>    
            </div>
          </div>
          <div class="col-12 col-lg-4 box">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <h5>Bootstrap</h5>
              <h4>Bootstrap is a CSS framework for designing better web pages</h4>
  
            </div>
          </div>
        </div>
        <div id="web-cert" class="row box">
          <div id="overlay-text">
            <h5>Web Certificates</h5>
            <h3>Get Certified in HTML, CSS, and Javascript</h3>
          </div>
          <div id="get-cert-btn" class="btn green-btn imp-btn"><a href="#getcertified">Get Certified</a></div>
          <img class="web-image" src="https://www.w3schools.com/getcertified.jpg">
        </div>
        <footer class="row box">
          <div id="links" class="row col-12">
            <div class="col-12 col-lg-6 d-lg-flex align-items-lg-center">
              
              <div class="btn light-btn"><a href="http://localhost/test/quiz/quizindex.php">QUIZZES</a></div>
            </div>
            <p class="col-12 col-lg-6 float-lg-right text-lg-right">| <a href="about.html">ABOUT</a></p>
          </div>
          <p class="col-12" id="footer-info">Learners is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our <a href="#termsofuse">terms of use</a>, <a href="cookieprivpolicy">cookie and privacy policy</a>.<br><a href="#copyright">Copyright 1999-2016</a> by Refsnes Data. All Rights Reserved.<br><br></p>
          <a class="col-12" id="thumbs-up" href="#facebook"><i class="fa fa-thumbs-o-up"></i></i></a>
        </footer>
      </div>
    </main>
	</div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
	
</html>

