<?php
//SQL uzklausa
 $gallery = get_post_gallery_images();
 ?>


 <div class ="col-6 col-m-12">
    <div class="hero-carousel">
      <?php for ($i = 0; count($gallery) > $i; $i++ ) : ?>
         <div> <img src="<?php echo $gallery[$i]; ?>" /> </div>
    	<?php endfor; ?>
    </div>
  </div>
<!-- <div class="hero-carousel">
  <div> <img src="https://blizzardwatch.com/wp-content/uploads/2016/04/OW_train_hopper_cover.jpg" alt="mccree"> </div>
  <div> <img src="https://d1u1mce87gyfbn.cloudfront.net/media/thumbnail/mccree-comic.jpg" alt="mccree"> </div>
  <div> <img src="https://d1u1mce87gyfbn.cloudfront.net/media/thumbnail/mccree-comic.jpg" alt="mccree"> </div>
  <div> <img src="https://d1u1mce87gyfbn.cloudfront.net/media/thumbnail/mccree-comic.jpg" alt="mccree"> </div>
  <div> <img src="https://d1u1mce87gyfbn.cloudfront.net/media/thumbnail/mccree-comic.jpg" alt="mccree"> </div>
</div> -->
