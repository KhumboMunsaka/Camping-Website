<?php include 'nav.php'; 
include 'includes/dbh.inc.php';?>

<?php 
if(isset($_POST['add_to_checkout'])) {
    $Pitch_name = $_POST['Pitch_name'];
    $price = $_POST['Price'];

    $select_checkout = mysqli_query($conn, "select * from `checkout` where Pitch_name = '$Pitch_name'");

    if(mysqli_num_rows($select_checkout) > 0) {
      $message[] = 'This pitch is already booked. Please try later';

    } else {
        $insert_pitch = mysqli_query($conn, "insert into `checkout`(Pitch_name, Price) values('$Pitch_name', '$price')");
        $message[] = 'This Pitch has been added to the checkout Successfully';
    }
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
    <div class="container pitches-content">
        <?php 
            $sql = 'Select * from pitches';
            $result = mysqli_query($conn, $sql);
            $pitches = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
                    if (isset($_SESSION['UserID'])) {
                        echo '<input type="submit" class="btn" value="Add to Checkout" name="add_to_checkout">';
                    } else {
                        echo '<p>You must log in to book a pitch</p>';
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
    </div> 
</main>
<?php include 'footer.php'; ?>
