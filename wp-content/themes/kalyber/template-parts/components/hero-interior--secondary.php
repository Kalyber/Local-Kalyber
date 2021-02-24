<?php
     $background_color = get_field('background_color');
     $background_dark  = colourBrightness($background_color, -0.1); // in functions file
     $headline         = get_field('headline');
     $subhead          = get_field('subhead');
?>

<div class="hero-interior--secondary__wrap">
     <div class="container hero-interior--secondary__inner">
          <h1><?= $headline ?></h1>
     </div>
</div>
<?php
     if($subhead) {
?>
     <div class="hero-interior--secondary__subhead__wrap" style="background-color:<?= $background_color ?>;">
          <div class="container hero-interior--secondary__subhead__inner">
               <h2><?= $subhead ?></h2>
          </div>
     </div>
<?php
     }
?>