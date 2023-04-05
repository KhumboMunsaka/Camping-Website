  <?php 
 include "dbh.inc.php";
 include 'nav.php';?>
    <?php 
    // <!--  ERR0R HANDLING********************************************************************** -->
if(isset($_POST['submit'])) {
include_once 'dbh.inc.php;';
 $first = $_POST['firstname'];
 $last = $_POST['lastname'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $password = $_POST['password'];



if(empty($first) || empty($last)|| empty($email)||empty($number)|| empty($password)) {
// header("Location:  signup.inc.php?signup=empty!");
        header("Location: sign-up.php?signup=empty");

exit();
}
else 
{
    // to check if email is valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: sign-up.php?invalid email!");
    }
    else {
   header("Location: sign-up.php?signup=error");

   exit();

    }
    
};
} else {
   header("Location: sign-up.php?signup=error");

exit();
};?>

 <?php
 $first = mysqli_real_escape_string($conn,$_POST['firstname'] );
 $last = mysqli_real_escape_string($conn,$_POST['lastname']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $number = mysqli_real_escape_string($conn,$_POST['phone_number']);
 $password = mysqli_real_escape_string($conn,$_POST['password']);
 
 
 
 
 $sql = "INSERT INTO users(first_name, last_name, email_address, phone_number, password) VALUES ('$first','$last','$email','$number','$password');";
 mysqli_query($conn, $sql);
 
 
 // header("Location: sign-up.php?signUp=success");
 ?>
    
 
    <main>
      <div class="container sign-up-success">
        <h2>You have signed up successfully!</h2>
        <br>
        <p>Proceed to <a href="/Home.php">Home Page</a></p>
      </div>
    </main>
 <?php include 'footer.php'; ?>
    