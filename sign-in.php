<?php include 'nav.php'; ?>
 <div class="bg-img bg-img-other">
      <main class="sign">
        <div class="container ">
            <h1>Welcome Back!</h1>
          <form action="/includes/signup.inc.php" method="post">
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
          </form>
        </div>
      </main>
    </div>
<?php include 'footer.php'; ?>
