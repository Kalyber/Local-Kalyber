<?php
/**
 * The template for displaying all single posts
 * 
 * @package KalyberNew
 */

get_header();
?>


<?php 
    if (have_posts()) : while (have_posts()) : the_post(); 
    
    $featured_id = get_post_thumbnail_id();
    $featured_url_array = wp_get_attachment_image_src($featured_id, 'thumbnail-size', true);
    $featured_url = $featured_url_array[0];    
?>

<main class="blog">
    <div class="blog__inner__wrap">
        <div class="blog__hero__wrap">
            <div class="blog__hero-image" style="background-image: url(<?= $featured_url ?>)"></div>
            <div class="blog__hero-text__wrap">
                <h1><?php the_field('title'); ?></h1>
            </div>
        </div>

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