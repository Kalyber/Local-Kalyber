<?php
     $headline = get_field('hero-interior-headline');

     if ( is_404() ) {
          $headline = "Page Not Found";
     }
?>


<!-- <div class="hero-interior__wrap" style="background-color:#034573;background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-interior__bk1.png);"> -->
<div class="hero-interior__wrap">
     <div class="container hero-interior__inner">
          <?php if ($args) { ?>
          <h1><?= $args['blog_header'] ?></h1>
          <?php } else { ?>
               <h1><?= $headline ?></h1>
          <?php } ?>
     </div>
</div>