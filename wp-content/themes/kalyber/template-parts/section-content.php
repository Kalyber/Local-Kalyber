<?php
     $featured_id = get_post_thumbnail_id();
     $featured_url_array = wp_get_attachment_image_src($featured_id, 'thumbnail-size', true);
     $featured_url = $featured_url_array[0];
?>

<a href="<?php the_permalink();?>" class="blog-item">
     <div class="blog-item__photo">
          <img src="<?= $featured_url ?>" alt="">
     </div>
     <div class="blog-item__details">
          <h2><?php the_field('title'); ?></h2>
     </div>
     <span class="blog-item__read-more">Read More</span>
</a>