<div class="photo-collage__wrap">
     <?php
          if( have_rows('photos') ):
               while( have_rows('photos') ) : the_row();
                    $image = get_sub_field('image');

                    if( !empty( $image ) ):      
     ?>
                         <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
     <?php
                    endif;
               endwhile;
          endif;
     ?>
</div>
