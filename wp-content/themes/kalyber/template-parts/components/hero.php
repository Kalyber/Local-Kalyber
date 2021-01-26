<?php
     // $headline = get_field('headline');
     $subhead  = get_field('subhead');
?>

<div class="hero-header__wrap">
     <div class="container hero-copy__wrap">
          <h1 class="hero-header">Marketing Made
          <div class="word__wrap">
               <div class="word w1">Simple</div>
               <div class="word w2">Human</div>
               <div class="word w3">Better</div>
               <div class="word w4">Executable</div>
               <div class="word w5">Faster</div>
          </div>
          </h1>
          <div class="hero-subhead">
               <?= $subhead ?>
          </div>

          <a href="/contact">
               <div class="hero-button__wrap">
                    <span class="hero-button">Learn&nbsp;How</span>
               </div>
          </a>

     </div>
</div>