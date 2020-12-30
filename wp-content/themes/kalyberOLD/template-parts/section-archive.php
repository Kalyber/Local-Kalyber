<?php
    $post_id = false;
    if( is_home() )
    {
        $post_id = get_option( 'page_for_posts'); // specic ID of home page
    }
    $blog_header = get_field('hero-interior-headline', $post_id);
?>

<main class="blog-landing">
    <?php get_template_part('template-parts/components/hero-interior', null, array( 'blog_header' => $blog_header) ); ?>
	<div class="page-container">
		<div class="right-side">
			<section class="masonry">
				<div class="grid">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/section','content'); ?>

                 <?php endwhile; else: endif; ?>
					
				</div>
            </section>
        
            <?php 
                    global $wp_query;

                    if ( $wp_query->max_num_pages >= 1 ){ 

                        $big = 999999999; // need an unlikely integer

                        $pages = paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'type'  => 'array',
                        ) );

                    if( is_array( $pages ) ) {
                        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                        echo '<div class="pagination"><ul class="">';
                        foreach ( $pages as $page ) {
                                echo "<li>$page</li>";
                        }
                        echo '</ul></div>';
                        }

                    }
                ?>
				
		  

			
        
        </div>
                  
  </main>
