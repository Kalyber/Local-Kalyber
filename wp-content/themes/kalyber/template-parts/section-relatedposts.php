<section class="featured-blogs">
            <div class="light-blue-blob"
                style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/blob-light-blue-2.svg'); background-color: transparent;">
                <div class="max-width">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-center">Featured Posts</h3>
                        </div>

                        <?php


$post_objects = get_field('related_blogs');

if( $post_objects ): ?>

                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>

                        <div class="col-4">
                            <a class="feature" href="<?php the_permalink(); ?>">
                                <div class="feature__image">

                                    <?php
                                    $fimage = get_field('banner_image');
                                    if( $fimage ):

                                        // Image variables.
                                        $furl = $fimage['url'];
                                        $ftitle = $fimage['title'];
                                        $falt = $fimage['alt'];
                                        $fcaption = $fimage['caption'];
                                    endif; ?>
                                    <img src="<?php the_field('banner_image'); ?>" alt="" />
                                </div>
                                <h5><?php the_field('title'); ?></h5>
                            </a>
                        </div>


                        <?php endforeach; ?>

                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif;

?>




                    </div>
                </div>
            </div>
        </section>