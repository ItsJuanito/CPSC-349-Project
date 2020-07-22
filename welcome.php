<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RateMyNetlfix</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
    p.ex1 {
      padding: 20px;
    }
    </style>
  </head>
  <body>
    <header>
      <meta http-equiv="Cache-control" content="no-cache">
      <a href="welcome.php" class="header-brand">RateMyNetlfix</a>
      <nav>
        <ul>
          <li><a href="AboutUs.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="gallery.php" class="header-cases">My Account</a>
      </nav>
    </header>
      <main>
      <section class="index-banner">
        <div class="vertical-center">
          <h2>RATE MY NETFLIX</h2>
          <h1>Honest Movie Reviews</h1>
          <h3>By: The Benchwarmers</h3>
        </div>
      </section>
      <p class="ex1"></p>
      <div class="container">
      <div class="jumbotron">
        <h3 class="text-center">Search For Any Movie</h3>
        <form id="searchForm">
          <input type="text" class="form-control" id="searchText" placeholder="Search Movie....">
        </form>
      </div>
      </div>

      <div class="container">
      <div id="movies" class="row"></div>
      </div>


      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/axios.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <div class="wrapper">
    </body>
</html>
