<?php
 include "dbh.inc.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="signup.inc.php" method="POST">
<input type="text" name="first" placeholder="firstname">
<br>
<input type="text" name="last" placeholder="lastname">
<br>

<input type="text" name="email" placeholder="email">
<br>

<input type="text" name="uid" placeholder="Username">
<br>

<input type="password" name="pwd" placeholder="Password">
<br>
<button type="submit" name="submit">Sign Up</button>
</form>
  

  
</body>
</html>