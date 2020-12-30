<?php
/**
 * The template for displaying the 404 template in the Kalyber theme.
 *
 * @package Kalyber
 * @subpackage Kalyber
 */

get_header();
?>

<?php get_template_part('template-parts/components/hero-interior'); ?>

<main class="landing">
     <div class="landing_inner_wrap">
          <div class="landing__rich-text--wrap">
               <p style="font-size:36px">As if 2020 couldn't get any worse</p>
                   
               <p>the page you're looking for doesn't exist. But there's other pages that do exist, and you might like to look at those.</p>

               <p>Our <a href="/">homepage</a> gives some information about who we are.</p>

               <p>The <a href="/what-we-do">what we do</a> page lets you see exactly... what we do.</p>

               <p>And the <a href="/contact">contact page</a> is especially nice, because we love getting email.</p>

               <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
     </div>
</main>

<?php 
get_footer();
?>