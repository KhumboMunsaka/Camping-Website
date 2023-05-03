<?php include 'nav.php'; 
require __DIR__. '/includes/signup.inc.php';
?>
      <main class="sign">
        <div class="container ">
            <h1>Sign Up To Our Page</h1>
          <form action="" method="post" class="fborm">
            <h2>Sign Up</h2>
            <p class='error error-hide'>You have not filled in all the fields</p>
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Please Enter First Name"
              class="firstname"
            />
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Please Enter Last Name "
              class="lastname"

            />
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Please Enter Email"
              class="email"
            /> <input
              type="tel"
              name="phone_number"
              id="number"
              placeholder="Please Enter Your Phone Number"
              class="number"
            />
            <p class='error p-error-hide'>Password must not be less than 6</p>

            <input
              type="password"
              name="password"
              id="password"
              placeholder="Please Enter Password "
              class="password"
              
            />
            <div class="g-recaptcha" data-sitekey="6LdLpFkSAAAAAED9ou3vq3yopKj2z1fPAqF8TJq3"></div>

            <button type="submit" name="submit">submit</button>
            <?php        
            ?>
        <?php 
// to display error messages
if(isset($_GET['error'])) {

if ($_GET['error']== 'emptyinput') {
echo "<p>Please fill in all fields</p>";
}

else if ($_GET['error']=='invalidemail'){
  echo "<p>Invalid Email</p>";
}
else if ($_GET['error']    =='emailaddressalreadyexists!'){
  echo "<p>This Email address already exists in our database</p>";
}
else if ($_GET['error']=='none'){
  echo "<p>You have signed up successfully</p>";
}
}

?>
          </form>
        </div>

      </main>


 <?php include 'footer.php'; 
 ?>
