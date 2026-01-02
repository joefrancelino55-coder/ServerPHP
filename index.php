<!DOCTYPE html>
<html>
<head>
<title>PHP Server</title>
<meta name="github" content="http://github.com/jefBRoutlook">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial;
    margin: 20px;
    border: 1px solid black;
  }

  /* Header */
  header {
    padding: 60px;
    text-align: center;
    background: #474A8A;
    color: white;
  }

  /* Top navigation bar */
  .navbar {
    display: flex;
    background-color: #333;
  }

  /* Navigation bar links */
  .navbar a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
  }

  /* Change color on hover */
  .navbar a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Column container */
  .container {  
    display: flex;
    flex-wrap: wrap;
  }

  /* Sidebar/left column */
  .side {
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
  }

  /* Main column */
  .main {
    flex: 70%;
    background-color: white;
    padding: 20px;
  }

  /* Fake image, just for this example */
  .fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
  }

  /* Footer */
  footer {
    padding: 20px;
    text-align: right;
    background: #474A8A;
  }

  select {
    padding: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    width: 140px; /* Adjust width as needed */
  }

  
  /* Responsive layout - when the screen is less than 700px wide, stack columns */
  @media screen and (max-width: 700px) {
    .container, .navbar {   
      flex-direction: column;
    }
  }
</style>
</head>
<body>

<!-- Note -->
<div style="background:yellow;padding:5px;text-align:center;display:none;">
  <h4>Resize the browser window to see the responsive effect.</h4>
</div>

<!-- Header -->
<header>
  <h1>
    PHP -S [localhost]:[port] -t [docroot]
  </h1>
  <p style="display:none;">With a <b>flexible</b> layout.</p>
</header>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="bemvindo.php?escolha=ini">Home</a>
  <a href="bemvindo.php?escolha=cfg">Setup</a>
</div>

<!-- Content Container -->
<div class="container">
  <div class="side" style="display:none;">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>cmd</h2>
    <span>contem</span>
    <h5>
      Updated on Nov 28, 2025<br>
      Updated on Dec 05, 2025
    </h5>

    <div> <img src="php_S_.jpg"> </div>
    <p></p>
    <span id="Pagina1">
    <p>
    This is the standard welcome page used to test the proper functioning of the PHP server after installation on Linux systems. If you can read this page, it means the HTTP server is working correctly.</p> 
    <p>
    If you are a regular user of this site and you don’t know what this page is about, visit my videos on YouTube for programming knowledge or my paid Udemy courses.</p>
    </span>
  </div>
</div>

<!-- Footer -->
<footer>

  <h2>
    - Copyright 2025
  </h2>
</footer>

</body>
</html>
