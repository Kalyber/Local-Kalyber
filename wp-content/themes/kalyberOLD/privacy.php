<?php

/* Template Name: Privacy */


get_header();?>

     <?php get_template_part('template-parts/components/hero-interior'); ?>

     <main class="landing">
          <div class="landing_inner_wrap">
               <div class="landing__rich-text--wrap">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                         the_content();
                         endwhile; else: ?>
                         <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
               </div>
          </div>
     </main>

<?php get_footer(); ?>