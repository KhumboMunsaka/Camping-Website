<?php include 'nav.php'; ?>
<main> 
    <div class="container attractions-content">
        <h2>What To See At Our CampSites</h2>
        <div class="attractions">
<?php 
if(isset($_POST['book_swim'])) {
    $lake_name = $_POST['lake_name'];
    $booking_date = $_POST['date'];
    $email = $_SESSION['email'];

    $select_checkout = mysqli_query($conn, "select * from `swim_sessions` where lake_name = '$lake_name'");

    if(mysqli_num_rows($select_checkout) > 0) {
      $message[] = 'This pitch is already booked. Please try later';
    } else {
        $insert_pitch = mysqli_query($conn, "insert into `pitch_bookings`(Pitch_name, Price, booking_date, email) values('$Pitch_name', '$price','$booking_date','$email')");
        $message[] = 'This Pitch has been booked Successfully';
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
 <div class="container pitches-content">
        <?php 
            $sql = 'Select * from lakes';
            $result = mysqli_query($conn, $sql);
            $lakes = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
        <h2>Swim Sessions Available!</h2>
        <?php foreach($lakes as $item): ?>      
        <form action="" method="POST" >  
            <div class="pitch-type">    
                <div class="pitch-type-img pitch-one">
                    <img src="<?php echo $item['image_link']?>" alt="image of a lake">
                </div>
                <div class="pitch-type-details">
                    <input type="hidden" name="lake_name" value="<?php echo $item['lake_name'] ?>">
                    <?php 
                    echo $item['description'];
                    if (isset($_SESSION['UserID']) || isset($_SESSION['email'])) {
                        echo '
                        <p>Set a date you would like to book</p>
                        <input type="datetime-local" name="datetime-local" id="">
                        <input type="submit" class="btn" value="Book Session" name="book_swim">';
                    } else {
                        echo '<p class="notLogged">You must<a href="sign-in.php"> sign in </a> to  book a swim session</p>';
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
    </div> 

<div class="attraction">
    <div class="attraction-img one">
        <img src="https://images.pexels.com/photos/5620427/pexels-photo-5620427.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image of a lake">
    </div>
    <div class="attraction-details">
        <p>The serene lake near our camping site is a natural wonder that never fails to captivate and inspire our visitors. Whether you're looking to swim, fish, paddle, or simply take in the breathtaking scenery, the lake offers a truly picturesque setting that is sure to leave a lasting impression. Come and experience the tranquility and beauty of the lake for yourself, and discover why it is one of the most beloved features of our camping site.</p>
        <button>Learn more</button>
    </div>
</div>


<div class="attraction">
    <div class="attraction-img two">
       <img src="https://images.pexels.com/photos/6271677/pexels-photo-6271677.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image of a campsite">
    </div>
    <div class="attraction-details ">
        <p>Our camp sites are designed to provide the ultimate outdoor experience, with spacious and comfortable accommodations that make you feel right at home in nature. Each site is carefully maintained and thoughtfully equipped with all the amenities you need to enjoy your stay, from fire pits for roasting marshmallows to picnic tables for sharing meals with loved ones. Whether you're a seasoned camper or new to the outdoors, our camp sites offer the perfect balance of comfort and adventure, making for an unforgettable experience you'll treasure for years to come.</p>
        <button>Learn More</button>
    </div>
</div>

<div class="attraction">
    <div class="attraction-img three">
        <img src="https://images.pexels.com/photos/161172/cycling-bike-trail-sport-161172.jpeg?auto=compress&cs=tinysrgb&w=600" alt="image of a biker">
    </div>
    <div class="attraction-details">
        <p>The bike trail near our camping site is a true gem for outdoor enthusiasts. It winds through stunning landscapes and offers breathtaking views that will take your breath away. Whether you're a seasoned biker or just looking for a leisurely ride, the trail is perfect for all skill levels. Take a break from the hustle and bustle of everyday life and let the beauty of nature and the thrill of biking invigorate your senses.</p>
        <button>Learn More</button>
    </div>
</div>

<div class="attraction">
    <div class="attraction-img four">
        <img src="https://images.pexels.com/photos/4818708/pexels-photo-4818708.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image of a bird">
    </div>
    <div class="attraction-details">
        <p>Our camp site is nestled in the heart of nature, surrounded by an abundance of wildlife that makes for a truly immersive and unforgettable experience. From majestic birds soaring overhead to playful deer grazing nearby, there's no shortage of opportunities to witness the wonders of nature up close. Whether you're an avid birdwatcher or just looking to connect with the natural world, the wildlife around our camp site is sure to leave a lasting impression.</p>
        <button>Learn More</button>
    </div>
</div>

</main>
<?php include 'footer.php'; ?>

