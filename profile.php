<?php 
 include 'nav.php'; 
?>
<?php 

// if(isset($_POST['book_pitch'])) {
//     $email = $_SESSION['email'];
// }
// else {
       
//     }
$email = $_SESSION['email']
?>
<main>
<div class="div">
<p class="black" >There is nothing in the bookings tables</p>
   <div class="container pitches-content">
        <?php 
        if(isset($_SESSION['email'])) {
            $sql = "Select * from pitch_bookings where email ='$email'";
            $result = mysqli_query($conn, $sql);
            $pitches = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        ?>
        <h2>CampSites Available!</h2>
        <?php foreach($pitches as $item): ?>      
        <form action="" method="POST" >  
            <div class="pitch-type">    
                <div class="pitch-type-img pitch-one">
                    <img src="<?php echo $item['image_link']?>" alt="image of a lake">
                </div>
                <div class="pitch-type-details">
                    <input type="hidden" name="Pitch_name" value="<?php echo $item['Pitch_name'] ?>">
                    <input type="hidden" name="Price" value="<?php echo $item['Price'] ?>">
                    <?php 
                    echo $item['Description'];
                    if (isset($_SESSION['UserID']) || isset($_SESSION['email'])) {
                        echo '
                        <input type="submit" class="btn" value="Book Pitfsdafdsfadsfsafsfdch" name="book_pitch">';
                    } else {
                        echo '<p class="notLogged">You must<a href="sign-in.php"> sign in </a> to  book a pitch</p>';
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
    </div> 
</main>