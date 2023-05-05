<?php 
session_start();
include 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" href="/style.css" />
    <script src="script.js" defer></script>
    <script
      src="https://kit.fontawesome.com/9d829ab911.js"
      crossorigin="anonymous"
    ></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
     <nav class="nav">
      <div class="hamburger">
        <i class="fa-solid fa-bars"></i>
      </div>

      <div class="nav-items">
          <div class="logo">
        <img src="/logo.svg" alt="logo" />
      </div>
        <ul class="nav-list invisible-nav">
          <li><a class="invisible-items" href="Home.php">HOME</a></li>
          <li><a class="invisible-items" href="Contact.php">CONTACT</a></li>
          <li><a class="invisible-items" href="Features.php">FEATURES</a></li>
          <li><a class="invisible-items" href="Reviews.php">REVIEWS</a></li>
          <li><a class="invisible-items" href="Information.php">INFORMATION</a></li>
          <li><a class="invisible-items" href="Pitch-types.php">PITCH-TYPES</a></li>
          <li><a class="invisible-items" href="Attractions.php">ATTRACTIONS</a></li>
          <?php
          if (isset($_SESSION['UserID'])) {
           echo '<li><a class="invisible-items" href="includes/logout.inc.php">SIGN-OUT</a></li>';
           echo '<li><a class="invisible-items" href="profile.php">PROFILE</a></li>';
          } else {
             echo '<li><a class="invisible-items" href="sign-in.php">SIGN-IN</a></li>';
           echo '<li><a class="invisible-items" href="sign-up.php">SIGN-UP</a></li>';
          }
          ?>
          
          
        </ul>
      </div>
    </nav>

     