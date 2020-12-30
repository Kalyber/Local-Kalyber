<?php
/**
 * The template for displaying all single posts
 * 
 * @package KalyberNew
 */

get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<main class="blog">
    <div class="blog__inner__wrap">
        <div class="blog__hero__wrap">
            <div class="blog__hero-image" style="background-image: url(<?php the_field('banner_image'); ?>)"></div>
            <div class="blog__hero-text__wrap">
                <h1><?php the_field('title'); ?></h1>
                <p><?php the_field('subheader'); ?></p>
            </div>
        </div>

        <!-- <a href="javascript:history.back()">
        <div class="blog__back-button__wrap">
            BACK
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M17.026 22.957c10.957-11.421-2.326-20.865-10.384-13.309l2.464 2.352h-9.106v-8.947l2.232 2.229c14.794-13.203 31.51 7.051 14.794 17.675z"/></svg>
        </div>
        </a> -->

        <div class="blog__rich-text">
            <div class="blog__rich-text--wrap">
                <?php the_field('body'); ?>
                <?php get_template_part('template-parts/components/social-container'); ?>
            </div>
            
            <?php get_template_part('template-parts/pop-up'); ?>
        </div> 
        

        <?php //get_template_part('template-parts/section','relatedposts'); ?>
       
    </div>

</main>



<?php endwhile; else: endif; ?>


<?php get_footer();?>