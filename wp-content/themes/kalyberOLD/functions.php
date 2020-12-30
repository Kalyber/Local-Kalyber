<?php

// Enqueuing
function load_css()
{
    // wp_register_style(
    //     'vendor', 
    //     get_template_directory_uri() . '/assets/css/vendor/vendor.css', 
    //     array(), 
    //     filemtime(get_template_directory() . '/assets/css/vendor/vendor.css'), 
    //     'all'
    //   );
    // wp_enqueue_style('vendor');

    wp_register_style(
        'main', 
        get_template_directory_uri() . '/assets/css/pages/index.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/index.css'),
        'all'
    );
    if (is_front_page() || is_404() ) {
        wp_enqueue_style('main');
    }

    wp_register_style(
        'blog', 
        get_template_directory_uri() . '/assets/css/pages/blog.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/blog.css'),
        'all'
    );
    if (is_single()) {
        wp_enqueue_style('blog');
    }

    wp_register_style(
        'solution', 
        get_template_directory_uri() . '/assets/css/pages/solution.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/solution.css'), 
        'all'
    );
    if (is_page_template('solution.php')) {
        wp_enqueue_style('solution');
    }

    wp_register_style(
        'contact', 
        get_template_directory_uri() . '/assets/css/pages/blog.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/blog.css'), 
        'all'
    );
        
    if (is_page_template('contactus.php')) {
        wp_enqueue_style('contact');
    }

    wp_register_style(
        'privacy', 
        get_template_directory_uri() . '/assets/css/pages/landing.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/landing.css'), 
        'all'
    );
        
    if (is_page_template('privacy.php')) {
        wp_enqueue_style('privacy');
    }

    wp_register_style(
        'landing', 
        get_template_directory_uri() . '/assets/css/pages/landing.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/landing.css'), 
        'all'
    );
    if (is_page_template('landing-page.php')) {
        wp_enqueue_style('landing');
    }

    wp_register_style(
        'ourstory', 
        get_template_directory_uri() . '/assets/css/pages/about.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/about.css'),
        'all'
    );
    if (is_page_template('our-story.php') || is_404() ) {
        wp_enqueue_style('ourstory');
    }

    wp_register_style(
        'blog-landing', 
        get_template_directory_uri() . '/assets/css/pages/blog.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/blog.css'),
        'all'
    );
    if (is_home() || is_category()) {
        wp_enqueue_style('blog-landing');
    }

    wp_register_style(
        'default', 
        get_template_directory_uri() . '/assets/css/pages/index.css', 
        [], 
        filemtime(get_template_directory() . '/assets/css/pages/index.css'),
        'all'
    );
    if (is_page_template('default')) {
        wp_enqueue_style('default');
    }
}
add_action('wp_enqueue_scripts', 'load_css');



// *** DEREGISTER GUTENBERG STYLES IF NOT LOGGED IN
if (!is_admin()) add_action("wp_enqueue_scripts", "kill_gutenberg_styles", 100);
function kill_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}





// function add_rel_preload($html, $handle, $href, $media) {
    
//     if (is_admin())
//         return $html;

//      $html = <<<EOT
// <link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
// EOT;
//     return $html;
// }
// add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );




// *** ADD GOOGLE FONTS ***
// function add_google_fonts() {
//     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', false ); 
// }
// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );




// *** DEFER SCRIPTS ***
function defer_scripts( $tag, $handle, $src ) {
    $defer = array( 
      'admin-bar',
      //'jquery',
      'smush-lazy-load',
      'rank-math',
      'wordfenceAJAXjs',
      'kalyber'
    );
  
    if ( in_array( $handle, $defer ) ) {
       return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
    return $tag;
} 
add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );
	



// *** DEREGISTER WP VERSION OF JQUERY ***
function kill_jquery() {
    wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'kill_jquery' );




// *** ENQUEUE SCRIPTS ***
function js_scripts() {
    wp_enqueue_script( 'kalyber', get_template_directory_uri() . '/assets/js/kalyber.js', array(), '1.0' );
    wp_enqueue_script( 'kalyber', get_template_directory_uri() . '/assets/js/vendor/vendor.js', array(), '1.0' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );


    // if(is_admin()){
    //     wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );
    // }

    // if(is_page()){
    //     $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );

    //     if($template_name !== 'test.php'){
    //         wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );
    //     } else {
    //         wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );
    //     }
    // }


}
add_action( 'wp_enqueue_scripts', 'js_scripts' );




// *** GET RID OF DASHICONS IF YOU AREN'T LOGGED IN ***
function remove_dashicons() {
    if ( ! is_user_logged_in() ) {
          wp_dequeue_style('dashicons');
    }
}
add_action( 'wp_enqueue_scripts', 'remove_dashicons' );




// Nav Menus
register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
));




// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');




// Image Sizes
add_image_size('small', 600, 600, false);




// lighten/darken color
function colourBrightness($hex, $percent) {
    $hash = '';// Work out if hash given
    if (stristr($hex, '#')) {
         $hex = str_replace('#', '', $hex);
         $hash = '#';
    }
    // HEX TO RGB
    $rgb = [hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2))];
    // CALCULATE
    for ($i = 0; $i < 3; $i++) {
         if ($percent > 0) {
              // Lighter
              $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
         } else {
              // Darker
              $positivePercent = $percent - ($percent * 2);
              $rgb[$i] = round($rgb[$i] * (1 - $positivePercent)); // round($rgb[$i] * (1-$positivePercent));
         }
         // In case rounding up causes us to go to 256
         if ($rgb[$i] > 255) {
              $rgb[$i] = 255;
         }
    }
    
    $hex = ''; // RBG to Hex
    for ($i = 0; $i < 3; $i++) {
         // Convert the decimal digit to hex
         $hexDigit = dechex($rgb[$i]);
         // Add a leading zero if necessary
         if (strlen($hexDigit) == 1) {
              $hexDigit = "0" . $hexDigit;
         }
         $hex .= $hexDigit; // Append to the hex string
    }
    return $hash . $hex;
}




// *** MOVE MATH RANK TO BOTTOM ***
function rank_math_change_metabox_priority() {
    return 'low';
}
add_filter( 'rank_math/metabox/priority', 'rank_math_change_metabox_priority' );




// *** ACF OPTIONS PAGE ***
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}




remove_filter('section', 'wpautop');






// *** TURN ON AND OFF AS NEEDED ***

// Get js handles needed for deferment function
// function mind_detect_enqueued_scripts() {
//     global $wp_scripts;
//     echo "Handles: ";
//     foreach( $wp_scripts->queue as $handle ) :
//       echo $handle . ', ';
//     endforeach;
//   }
  
//   add_action( 'wp_print_scripts', 'mind_detect_enqueued_scripts' );