<?php 
 include 'nav.php'; 
 $email = $_SESSION['email'];



      if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>


<main>
<div class="div">
   <div class="container pitches-content">
    <!-- To get the boookings of the logged in user -->
        <?php 
        if(isset($_SESSION['email'])) {
            $sql = "SELECT * FROM pitches INNER JOIN pitch_bookings ON pitches.pitch_name = pitch_bookings.pitch_name WHERE pitch_bookings.email = '$email';";
            $result = mysqli_query($conn, $sql);
            $pitches = mysqli_fetch_all($result, MYSQLI_ASSOC);

            if(mysqli_num_rows($result) > 0) {
                echo "<h2>Your booked pitches</h2>";
            }
            else {
                echo "<h2>You haven't booked any pitches</h2>";
            }
        }
        ?>
   
<!-- to get the details to display on the page -->
        <?php foreach($pitches as $item): ?>      
        <form action="" method="POST" >  
            <div class="pitch-type">    
                <div class="pitch-type-img pitch-one">
                    <img src="<?php echo $item['image_link']?>" alt="image of a lake">
                </div>
                <div class="pitch-type-details">
                    <input type="hidden" name="Pitch_name" value="<?php echo $item['Pitch_name'] ?>">
                    <?php 
                    echo $item['Description'];
                    if (isset($_SESSION['UserID']) || isset($_SESSION['email'])) {
                        echo '
                        <input type="submit" class="btn" value="Cancel Booking" name="delete_booking">';
                        
                    } else {
                        echo '<p class="notLogged">You must<a href="sign-in.php"> sign in </a> to  book a pitch</p>';
                    }
                    ?>
                    <input type="date" name="booking_date" value="<?php echo $item['booking_date'] ?>">
                </div>
            </div>
        </form>
        <?php 
// To cancel a booking
if(isset($_POST['delete_booking'])) {
    $Pitch_name = $_POST['Pitch_name'];
    $email = $_SESSION['email'];
    $delete = mysqli_query($conn, "DELETE FROM `pitch_bookings` WHERE email = '$email';");

    // if(mysqli_num_rows($select_checkout) > 0) {
    //   $message[] = 'This pitch is already booked. Please try later';
    // } else {
    //     $insert_pitch = mysqli_query($conn, "insert into `pitch_bookings`(Pitch_name, Price, booking_date, email) values('$Pitch_name', '$price','$booking_date','$email')");
    //     $message[] = 'This Pitch has been booked Successfully';
    // } 
}
?>
   
        <?php endforeach; ?>
    </div> 
</main>