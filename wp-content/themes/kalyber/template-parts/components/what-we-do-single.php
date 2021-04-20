<?php
     $shortcode_id = get_field('form_id');
     $shortcode    = '[contact-form-7 id="'.$shortcode_id.'"]';
?>



<article class="container__full-mobile what-we-do-single__container">
     <div class="what-we-do-single__content">
          <?php the_content(); ?>
     </div>
     <div class="what-we-do-single__form">
          <h3 class="color__white">Supercharge Your Marketing</h3>
          <p class="color__white">For more information about how Kalyber can help your business, use the form below.</p>

          <?php echo do_shortcode($shortcode); ?>
     </div>
</article>