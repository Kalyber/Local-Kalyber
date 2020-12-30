<div class="cardinal">
    <div class="row">
<?php
/**
 * Displays a section with four callout boxes.
 *
 * @package Kalyber
 * @subpackage kalyber
 */
while (have_rows('callouts')) : the_row();
    $title = get_sub_field('callout_title');
    $lede = get_sub_field('callout_lede');
    $content = get_sub_field('callout_content');
?>
<div class="col-6">
    <h3><?= $title; ?></h3>
    <p><?= $lede; ?></p>
    <?= $content ?>
</div>
<?php
endwhile;

$bottom_content = get_field('bottom_content');

if ($bottom_content):
?>
<?= $bottom_content ?>
<?php endif; ?>
    </div>
</div>