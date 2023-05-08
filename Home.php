<?php include 'nav.php'; ?>
<header>
  <div class="bg-img" id="bg-img">
    <div class="intro-heading">
      <h1>GLOBAL WILD <span>SWIMMING</span> AND <span>CAMPING</span></h1>
      <p>Experience the ultimate outdoor adventure with our top-quality camping and swimming facilities</p>
        <?php
if(isset($_SESSION['email'])) { 
  echo "Welcome " . $_SESSION['firstname'];
}


        ;?>
          
    </div>
    <div class="cta">
      <div class="cta-buttons">
        <button id="cta1"><a href="Information.php">BOOK A PITCH NOW</a></button>
        <button id="cta2"> <a href="/Attractions.php">BOOK POOL NOW</a> </button>
      </div>
      <div class="cta-search">
        <label for="search">Search</label>
        <input type="search" name="search" id="search" placeholder="Search for available bookings!">
      </div>
    </div>
  </div>
</header>










      <section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
      <button class="carousel-button prev" data-carousel-button="prev">&#8678;</button>
      <button class="carousel-button next" data-carousel-button="next">&#8680;</button>
      <ul data-slides>
        <li class="slide" data-active>
          <img src="https://images.pexels.com/photos/1687845/pexels-photo-1687845.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature Image #1">
        </li>
        <li class="slide">
          <img src="https://images.pexels.com/photos/2398220/pexels-photo-2398220.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature Image #2">
        </li>
        <li class="slide">
          <img src="https://images.pexels.com/photos/2582818/pexels-photo-2582818.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature Image #3">
        </li>
      </ul>
    </div>
    <section id="location">
      <div class="location">
        <h2>Find us here</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d239.1326728978781!2d0.44236238401519784!3d50.92767274922418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2szm!4v1683033245013!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
      </section>
      <main>
        <main class="main-content">
          <div class="container">
        <h2>What Makes Our Campsite Special</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt</p>
        <div class="content-boxes">
          <!-- start sw-rss-feed code --> 
<div class="rss-feed">

<script type="text/javascript"> 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://4wheelcamping.blogspot.com/feeds/posts/default?alt=rss";  
rssfeed_frame_width="530"; 
rssfeed_frame_height="260"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style6.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="on"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "70f5784a7da86bc03d28d8e5db57e1dc"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="color:#ccc;font-size:10px; text-align:right; width:530px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
          </div>

<!-- end sw-rss-feed code -->
          <div class="content-box">
            <i class="fa-solid fa-cart-shopping"></i>
           <p>This page was viewed</p>
<h1 id="count">0</h1>
<p>times</p>
          </div>
        </div>
      </div>
    </main>
    </main>
<?php include 'footer.php'; ?>
 
