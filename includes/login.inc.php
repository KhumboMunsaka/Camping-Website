<?php

if(isset($_POST['submit'])) {
  $email     = $_POST["email"];
  $pwd  = $_POST["pwd"];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
  
  
  if (emptyInputLogin($email, $password) !== false) {
          header("location: ../sign-in.php?error=emptyinput");
          exit();
      }
      loginUser($conn, $email, $pwd);
}
else {
    header('location: ../login.php');
    exit();
}

