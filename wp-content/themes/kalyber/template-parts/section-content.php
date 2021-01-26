<?php
     $featured_id = get_post_thumbnail_id();
     $featured_url_array = wp_get_attachment_image_src($featured_id, 'thumbnail-size', true);
     $featured_url = $featured_url_array[0];
?>

<a href="<?php the_permalink();?>" class="item" style="background-image: url('<?= $featured_url ?>');">
     <div class="item__details">
          <h2><?php the_field('title'); ?></h2>
          <span class="read">Read More</span>
     </div>
</a>