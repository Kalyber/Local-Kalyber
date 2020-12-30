<?php 

/* Template Name: Blog */



get_header();?>
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

        <a href="javascript:history.back()">
        <div class="blog__back-button__wrap">
            BACK
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M17.026 22.957c10.957-11.421-2.326-20.865-10.384-13.309l2.464 2.352h-9.106v-8.947l2.232 2.229c14.794-13.203 31.51 7.051 14.794 17.675z"/></svg>
        </div>
        </a>

        <div class="blog__rich-text">
            <div class="blog__rich-text--wrap">
                <?php the_field('body'); ?>
            </div>
        </div> 
        <div class="blog__social__wrap">
            <h4>Share on Social</h4>
             <!-- sharing -->
             <div style="width: 100%; text-align: center; overflow: auto;">
                <div style="display: inline-block; width: 250px; padding: 6px 0 6px 0;">
                    <!-- facebook -->
                    <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;u=<?php echo get_permalink( $post->ID ); ?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" style="margin: 0 5px 0 5px;">
                        <g id="icon_facebook--single" data-name="Facebook"><g id="Layer_1-2" data-name="Layer 1"><path class="social--header" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm2.92,10.38H10.74v5.84H8.52V10.38H7V8.28H8.52V6.49a2.67,2.67,0,0,1,3-2.71A13,13,0,0,1,13,3.86l0,2H11.62c-.76,0-.88.35-.88.93V8.28H13Z"/></g></g>
                    </svg>
                    </a>
                    <!-- twitter -->
                    <a onclick="window.open('https://twitter.com/share?url=<?php echo get_permalink( $post->ID ); ?>&amp;text=<?php the_title();?> &amp;hashtags=huttonconstruction', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" style="margin: 0 5px 0 5px;">
                        <g id="icon_twitter--single" data-name="Twitter"><g id="Layer_1-2" data-name="Layer 1"><path class="social--header" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm4.84,7.57A6.81,6.81,0,0,1,8,14.75a6.62,6.62,0,0,1-3.5-1A5.5,5.5,0,0,0,7.9,12.72,2.51,2.51,0,0,1,5.64,11a2.6,2.6,0,0,0,1.17,0,2.51,2.51,0,0,1-2-2.32,2.57,2.57,0,0,0,1,.2,2.56,2.56,0,0,1-.62-3.24,6.36,6.36,0,0,0,4.92,2.48A4.69,4.69,0,0,1,10,7.66,2.41,2.41,0,0,1,14.22,6a5.35,5.35,0,0,0,1.51-.61,2.41,2.41,0,0,1-1.07,1.3v0A4.84,4.84,0,0,0,16,6.4,2.44,2.44,0,0,1,14.84,7.57Z"/></g></g>
                    </svg>
                    </a>
                    <!-- linkedin -->
                    <a onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_permalink( $post->ID ); ?>&amp;title=<?php echo urlencode(wp_title('',false)); ?>&amp;summary=<?php echo urlencode($og_description); ?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" style="margin: 0 5px 0 5px;">
                        <g id="icon_linkedin--single" data-name="LinkedIn"><g id="Layer_1-2" data-name="Layer 1"><path class="social--header" d="M10.75,9.12v0l0,0Z"/><path class="social--header" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0ZM7.3,14.83H5.07V8.15H7.3ZM6.19,7.24h0a1.16,1.16,0,1,1,0-2.31,1.16,1.16,0,1,1,0,2.31Zm9.12,7.59H13.09V11.26c0-.9-.33-1.51-1.13-1.51a1.22,1.22,0,0,0-1.14.81,1.48,1.48,0,0,0-.07.54v3.73H8.53s0-6.05,0-6.68h2.22V9.1a2.19,2.19,0,0,1,2-1.11c1.46,0,2.56,1,2.56,3Z"/></g></g>
                    </svg>
                    </a>
                    <!-- email -->
                    <a href="mailto:?subject=<?php the_title();?>&amp;body=Check out this post by Greteman Group: <?php echo get_permalink( $post->ID ); ?>"title="Share <?php echo urlencode(wp_title('',false)); ?> by Greteman Group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" style="margin: 0 5px 0 5px;">
                        <path id="icon_email--single" class="social--header" d="M10,0C4.5,0,0,4.5,0,10s4.5,10,10,10s10-4.5,10-10S15.5,0,10,0z M4.7,6h10.6c0.2,0,0.2,0.2,0.1,0.3l-5.1,4.2 c-0.2,0.2-0.5,0.2-0.7,0L4.6,6.3C4.4,6.2,4.5,6,4.7,6z M15.6,13.7c0,0.2-0.1,0.3-0.3,0.3H4.7c-0.2,0-0.3-0.1-0.3-0.3V7.8 c0-0.1,0.1-0.1,0.2-0.1l4.6,3.9c0.5,0.4,1.2,0.4,1.7,0l4.6-3.9c0.1-0.1,0.2,0,0.2,0.1V13.7z"/>
                    </svg>
                    </a>
                </div>
                </div>
        </div>


        <?php //get_template_part('template-parts/section','relatedposts'); ?>
       
    </div>

</main>



<?php endwhile; else: endif; ?>
<?php get_footer();?>