<?php
     $background_color = get_field('background_color');
     $background_dark  = colourBrightness($background_color, -0.1); // in functions file
     $background_image = get_field('background_image');
     $headline         = get_field('headline');
     $subhead          = get_field('subhead');
?>

<div class="hero-interior--secondary__wrap" style="background-color:<?= $background_dark ?>;background-image:url(<?= $background_image ?>);">
     <div class="container hero-interior--secondary__inner">
          <h1><?= $headline ?></h1>
     </div>
</div>
<?php
     if($subhead) {
?>
     <div class="hero-interior--secondary__subhead__wrap" style="background-color:<?= $background_color ?>;">
          <div class="container hero-interior--secondary__subhead__inner">
               <h1><?= $subhead ?></h1>
          </div>
     </div>
<?php
     }
?>