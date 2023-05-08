<?php include 'nav.php'; 
require __DIR__. '/includes/login.inc.php';
require __DIR__. '/includes/functions.php';

if (!isset($_SESSION["login_attempts"])) {
    $_SESSION["login_attempts"] = 0; // Initialize login_attempts if it doesn't exist
}

if (isset($_SESSION["locked"]))
{
    $difference = time() - $_SESSION["locked"];
    if ($difference > 600)
    {
        unset($_SESSION["locked"]);
        unset($_SESSION["login_attempts"]);
    }
}
?>
 <div class="bg-img bg-img-other">
      <main class="sign">
        <div class="container ">
            <h1>Welcome Back!</h1>
          <form action="/includes/login.inc.php" method="POST">
            <h2>Sign In</h2>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Please Enter Email"
            />
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Please Enter Password "
            />
            <?php 
            if($_SESSION["login_attempts"] > 2) {
              $_SESSION["locked"] = time(); 
              echo 'You have failed to login 3 times. Wait ten minutes and think about your password.';
            } else {
              echo "<button type='submit' name='submit'>LOGIN IN</button>" ;
            }
              ?>
              

              
              <?php 
// to display error messages
if(isset($_GET['error'])) {

if ($_GET['error']== 'emptyinput') {
echo "<p class='errMessage' >Please fill in all fields</p>";
}

else if ($_GET['error']=='wronglogin'){
  echo "<p class='errMessage' >Incorrect Details</p>";
}

else if ($_GET['error']=='none'){
  echo "<p>You have logged up successfully</p>";
}
}
?>
          </form>
        </div>
      </main>
    </div>
<?php include 'footer.php'; ?>
