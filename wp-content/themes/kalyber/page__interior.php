<?php 
  /* Template Name: Plain Interior Page */
get_header();?>

<?php get_template_part('template-parts/components/hero-interior'); ?>

<div class="landing">
  <div class="landing_inner_wrap">
    <div class="landing__rich-text--wrap">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer();?>