<?php include 'nav.php'; 
include "dbh.inc.php";
?>

      <main class="sign">
        <div class="container ">
            <h1>Sign Up To Our Page</h1>
          <form action="/signup.inc.php" method="post">
            <h2>Sign Up</h2>
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Please Enter First Name"
            />
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Please Enter Last Name "
            />
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Please Enter Email"
            /> <input
              type="tel"
              name="phone_number"
              id="email"
              placeholder="Please Enter Your Phone Number"
            />
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Please Enter Password "
            />
            <div class="g-recaptcha" data-sitekey="6LdLpFkSAAAAAED9ou3vq3yopKj2z1fPAqF8TJq3"></div>

            <button type="submit" name="submit">submit</button>
          </form>
        </div>
      </main>
 <?php 
 $fullUrl = 'https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL]';

 if(strpos($fullUrl, "signup=empty") == true) {
echo "<p class='error'>You have not filled in all the fields</p>";
 }
  ?>

 <?php include 'footer.php'; ?>
