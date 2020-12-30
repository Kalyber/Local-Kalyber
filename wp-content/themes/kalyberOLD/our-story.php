<?php
/* Template Name: Our Story */

get_header();?>

            
<main class="about">
  	
<?php
	if( have_rows('sections') ){ 
	?>



    <?php while( have_rows('sections') ): the_row(); 

	// vars
	//$section = get_sub_field('section');
	
   //echo $section;
   the_sub_field('section', false, false);
    endwhile;
    

    }
   
?>
  </main>

<?php get_footer();?>