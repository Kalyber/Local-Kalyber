<?php
     $background_color = get_field('background_color');

     if(get_field('text_block_headline')):
          $headline = "<h2>".get_field('headline')."</h2>";
     endif;

     $copy = get_field('copy');
?>

<div class="text-block__wrap" style="background-color:<?= $background_color['background_color'] ?>;">
     <div class="container text-block__inner">
          <?= $headline ?>
          <?= $copy ?>
     </div>
</div>