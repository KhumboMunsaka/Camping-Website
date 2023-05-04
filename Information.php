<?php include 'nav.php'; ?>


<main> 
    <div class="container pitches-content">
      <?php 
$sql = 'Select * from pitches';
$result = mysqli_query($conn, $sql);
$pitches = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>
        <h2>CampSites Available!</h2>
        
    <?php foreach($pitches as $item): ?>      
<form action="POST">      
<div class="pitch-type">

    <div class="pitch-type-img pitch-one">
        <img src="<?php echo $item['image_link']?>" alt="image of a lake">
    </div>
    <div class="pitch-type-details">
       <?php echo $item['Description'];
          if (isset($_SESSION['UserID'])) {
           echo '<input type="submit" class="btn" value="Add to Checkout" name="Add to Checkout">';
          } else {
             echo '<p>You must log in to book a pitch</p>';
          }
          ?>
    </div>
</div>
 </form>

 <?php endforeach; ?>

</main>
<?php include 'footer.php'; ?>
