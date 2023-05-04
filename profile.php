<?php 
 include 'nav.php'; 
?>
<?php 
$sql = 'Select * from checkout';
$result = mysqli_query($conn, $sql);
$bookings = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>
<main>
<div class="div">
    <?php if(empty($checkout)): ?>
<p class="black" >There is nothing in the bookings tables</p>
        <?php endif; ?>
</div>
</main>