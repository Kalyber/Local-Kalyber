<?php
     if (have_rows('section_content')):
          while( have_rows('section_content') ): the_row();
               $background_color = get_sub_field('background_color');
               $background_dark  = colourBrightness($background_color, -0.1); // in functions file
               $headline         = get_sub_field('headline');
               $subhead          = get_sub_field('subhead');
               $content          = get_sub_field('content');
               $image            = get_sub_field('section_image');  
               $page_link        = get_sub_field('button_link');
?>

     <div class="what-we-do__section-head" style="background-color:<?= $background_dark ?>;">
          <div class="container">
               <div class="what-we-do__title"><?= $headline ?></div>
               <div class="what-we-do__subhead"><?= $subhead ?></div>
          </div>
     </div>
     <div class="what-we-do__wrap" style="background-color:<?= $background_color ?>;">
          <div class="what-we-do__inner">
               <div class="what-we-do__left">
                    <?= $content ?>
                    <br>
                    <a class="button button--white" href="<?= $page_link ?>" style="color:<?= $background_dark ?> !important;">LEARN MORE</a>
               </div>
               <div class="what-we-do__right">
               <?php 
                    if( !empty( $image ) ): 
               ?>
                         <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
               <?php endif; ?>
               </div>
          </div>
     </div>

<?php
          endwhile;
     endif;
?>