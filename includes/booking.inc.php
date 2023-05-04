<?php
if(isset($_POST['submit'])) {
  $firstname = $_POST["email"];
  $pwd  = $_POST["password"];
  require_once 'dbh.inc.php';
  require_once 'functions.php';
  
  if (emptyInputLogin($email, $pwd) !== false) {
      header("location: ../sign-in.php?error=emptyinput");
      exit();
    } else {
        header("location: ../Home.php?error=emptyinput");
        loginUser($conn, $email, $firstname, $pwd, );

        }
    } 