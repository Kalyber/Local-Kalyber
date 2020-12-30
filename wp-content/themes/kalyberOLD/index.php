<?php
/* Template Name: Blog Listing */

get_header();?>

archive

<h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>



<?php get_footer();?>