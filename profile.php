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
        <?php endforeach; ?>
        
        <!-- For swim sessions -->
         <?php 
        if(isset($_SESSION['email'])) {
             $sql = "SELECT * FROM swim_sessions JOIN lakes ON swim_sessions.lake_name = lakes.lake_name WHERE swim_sessions.email = '$email';";
            $result = mysqli_query($conn, $sql);
            $sessions = mysqli_fetch_all($result, MYSQLI_ASSOC);

            if(mysqli_num_rows($result) > 0) {
                echo "<h2>Your booked swim sessions</h2>";
            }
            else {
                echo "<h2>You haven't booked any swim sessions</h2>";
            }
        }
        ?>
    <?php foreach($sessions as $item): ?>      
        <form action="" method="POST" >  
            <div class="pitch-type">    
                <div class="pitch-type-img pitch-one">
                    <img src="<?php echo $item['image_link']?>" alt="image of a lake">
                </div>
                <div class="pitch-type-details">
                    <input type="hidden" name="Pitch_name" value="<?php echo $item['lake_name'] ?>">
                    <?php 
                    echo " Date and time: " .$item['session_time'];;
                    if (isset($_SESSION['UserID']) || isset($_SESSION['email'])) {
                        echo '
                        <input type="submit" class="btn" value="Cancel Session" name="cancel_session">';
                        
                    } else {
                        echo '<p class="notLogged">You must<a href="sign-in.php"> sign in </a> to  book a pitch</p>';
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
 </div>


        <?php 
// To cancel a booking
if(isset($_POST['delete_booking'])) {
    $Pitch_name = $_POST['Pitch_name'];
    $email = $_SESSION['email'];
    $delete = mysqli_query($conn, "DELETE FROM `pitch_bookings` WHERE email = '$email';");

 if ($delete) {
        $delete = true;
    } else {
        $delete = false;
    }
    
    if ($delete) {
        $message[] = 'Booking deleted successfully!';
    } else {
        $message[] = 'Error occurred while deleting session.';
    }

}
?>
<!-- to cancel a swim session-->
        <?php 
if(isset($_POST['cancel_session'])) {
    $email = $_SESSION['email'];
    $delete = mysqli_query($conn, "DELETE FROM `swim_sessions` WHERE email = '$email';");
    
     if ($delete) {
        $delete = true;
    } else {
        $delete = false;
    }
    
    if ($delete) {
        $message[] = 'Booking deleted successfully!';
    } else {
        $message[] = 'Error occurred while deleting session.';
    }

}
?>
</main>