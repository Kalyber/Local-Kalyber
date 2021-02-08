<?php
     if (have_rows('customers')):
          while( have_rows('customers') ): the_row();
               $background_color  = get_sub_field('background_color');
               $background_dark   = colourBrightness($background_color, -0.1); // in functions file
               $headline          = get_sub_field('headline');
               $main_content      = get_sub_field('main_content');
               $link              = get_sub_field('link');
               $quote             = get_sub_field('quote');
               $attribution       = get_sub_field('quote_attribution');
               $image             = get_sub_field('photo');  

               if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
               endif;
?>

     <section class="stories__item" style="background-color:<?= $background_color ?>;">
          <div class="what-we-do__section-head" style="background-color:<?= $background_dark ?>;">
               <div class="container">
                    <div class="what-we-do__title"><?= $headline ?></div>
               </div>
          </div>

          <div class="stories__item__content">
               <div class="stories__copy">
                    <div class="stories__copy__inner">
                         <?= $main_content ?>
                         <br>
                         <a class="button button--white" style="color:<?= $background_dark ?> !important;" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
               </div>
               <div class="stories__quote">
                    <div class="stories__quote__inner" style="border-color:<?= $background_dark ?>;">
                         <?= $quote ?>
                         <span><?= $attribution ?></span>
                    </div>
               </div>
               <div class="stories__media">
                    <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>">
               </div>
          </div>
     </section>

<?php
          endwhile;
     endif;
?>