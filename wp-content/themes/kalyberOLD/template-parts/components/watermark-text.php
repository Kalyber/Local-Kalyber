<?php
    $headline = get_field('water_mark_headline');
    $copy     = get_field('water_mark_copy');
?>


<div class="watermark-text__wrap" style="background-color:#0077c8;">
    <div class="container watermark-text__inner">
        <div class="watermark-text__head">
            <h2><?= $headline ?></h2>
        </div>
        
        <div class="divider--vertical color__white--bk"></div>

        <div class="watermark-text__copy">
            <?= $copy ?>
        </div>
        
    </div>
</div>