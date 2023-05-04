<?php include 'nav.php'; 
require __DIR__. '/includes/login.inc.php';
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
            if(isset($_GET['error'])) { 
              
            }
              ?>

               <button type="submit" name="submit">Login in</button>
              <?php 
// to display error messages
if(isset($_GET['error'])) {

if ($_GET['error']== 'emptyinput') {
echo "<p>Please fill in all fields</p>";
}

else if ($_GET['error']=='wronglogin'){
  echo "<p>Incorrect Details</p>";
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
