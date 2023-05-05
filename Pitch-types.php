<?php include 'nav.php'; ?>
<main>
    <div class="container search-page">
        <div class="search">
            <form action="" method="POST">
                <h1>Search Availability</h1>
                 <h2>CampSites Available!</h2>
                <p>Click search to see which pitces are available</p>
                <button type="submit" name="search">SEARCH</button>
            </form>
        </div>
    </div>
    
    <div class="container pitches-content">
        <?php 
            if(isset($_POST['search'])) {
                $sql = 'SELECT * FROM pitches LEFT JOIN pitch_bookings ON pitches.pitch_name = pitch_bookings.Pitch_name WHERE pitch_bookings.Pitch_name IS NULL;';
                $result = mysqli_query($conn, $sql);
                $pitches = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach($pitches as $item): ?>      
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
                                <p>Set a date you would like to book</p>
                                <input type="date" name="date" id="date">
                                <input type="submit" class="btn" value="Book Pitch" name="book_pitch">';
                            } else {
                                echo '<p class="notLogged">You must<a href="sign-in.php"> sign in </a> to  book a pitch</p>';
                            }
                            ?>
                        </div>
                    </div>
                </form>
                <?php endforeach; ?>
            <?php } else { ?>
               
            <?php } ?>
    </div> 
</main>
<?php include 'footer.php'; ?>
