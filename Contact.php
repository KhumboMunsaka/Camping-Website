<?php include 'nav.php'; ?>


<?php 
if(isset($_POST['inquiry_submit'])) {
    $firstname = $_POST['first_name'];
    $inquiry = $_POST['inquiry'];
    $email = $_SESSION['email'];

        $insert_inquiry = mysqli_query($conn, "insert into `inquiry`(firstname, email, inquiry) values('$firstname', '$email','$inquiry')");
        $message[] = 'Message sent successfully!'; 
}
?>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>
<main>
       <main class="sign">
        <div class="container ">
            <h1>Get In Touch Here</h1>
          <form action="" method="post">
            <h2>Contact Us</h2>
            <a href="/privacy.policy.php">View Our Privacy Policy Here</a>
            <input
              type="text"
              name="first_name"
              id="firstname"
              placeholder="Please Enter First Name"
            />
          <textarea name="inquiry" id="" cols="30" rows="10" placeholder="Leave Your Message Here"></textarea>
          <?php 
                    if (isset($_SESSION['UserID']) || isset($_SESSION['email'])) {
                        echo '<button type="submit" name="inquiry_submit">Submit</button>';
                    } else {
                        echo '<p class="notLogged">You must<a href="sign-in.php"> sign in </a> send an inquiry</p>';
                    }
                    ?>
          </form>
        </div>
      </main>
</main>
<?php include 'footer.php'; ?>


