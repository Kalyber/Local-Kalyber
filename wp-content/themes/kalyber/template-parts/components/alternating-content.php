<div class="alternating-content__holder">
     <?php
          if (have_rows('alternating_content')):
               while( have_rows('alternating_content') ): the_row();
                    $headline        = get_sub_field('alternating_content_headline');
                    $copy            = get_sub_field('alternating_content_copy');
                    $image           = get_sub_field('alternating_content_image');
                    //$image_no_ext    = explode('.', $image);
                    //$image_desk      = $image_no_ext[0].'.jpg';

                    //echo '<pre>', var_dump($image), '</pre>';
                    //die();
     ?>

          <div class="alternating-content__wrap">
               <div class="container alternating-content">
                    <div class="feature-text">
                         <h3><?= $headline ?></h3>
                         <?= $copy ?>
                    </div>
                    <div class="feature-image__wrap">
                         <picture>
                              <source srcset="<?= esc_url($image['sizes']['small']) ?>" media="(max-width: 640px)">
                              <source srcset="<?= esc_url($image['sizes']['large']) ?>" media="(max-width: 1024px)">
                              <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>">
                         </picture>
                    </div>
               </div>
          </div>

     <?php
               endwhile;
          endif;
     ?>
</div>

