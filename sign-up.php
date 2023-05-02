<?php include 'nav.php'; 
include '/includes/signup.inc.php'
?>

      <main class="sign">
        <div class="container ">
            <h1>Sign Up To Our Page</h1>
          <form action="" method="post" class="form">
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

          </form>
        </div>
      </main>


 <?php include 'footer.php'; ?>
