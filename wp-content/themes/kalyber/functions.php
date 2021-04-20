<?php
/**
 * KalyberNew functions and definitions
 *
 * @package KalyberNew
 */


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kalybernew_setup' ) ) :
	function kalybernew_setup() {
		load_theme_textdomain( 'kalybernew', get_template_directory() . '/languages' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'kalybernew_setup' );




/**
 * Enqueue scripts and styles.
 */
if (! function_exists('kalybernew_enqueue')) :
	function kalybernew_enqueue() {
		// STYLES
		// wp styles - usually will be blank
		wp_enqueue_style( 'wp-styles', get_stylesheet_uri(), array(), _S_VERSION );
		wp_style_add_data( 'wp-styles', 'rtl', 'replace' );
		// custom stylesheet
		wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/pages/index.css', array(), filemtime(get_template_directory() . '/assets/css/pages/index.css'), false);

		// SCRIPTS
		// kill WordPress version of jquery
		wp_deregister_script( 'jquery' );
		// google hosted jQuery in header - because plugins
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );
		// custom js
          wp_enqueue_script( 'kalybernew_js', get_template_directory_uri() . '/assets/js/kalyber.js', array(), '1.0' );

          // OPTIONAL - SELECTIVELY TURN ON JQUERY
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
	add_action( 'wp_enqueue_scripts', 'kalybernew_enqueue' );
endif;




function defer_scripts( $tag, $handle, $src ) {
     $defer = array( 
          'admin-bar', 
          'wordfenceAJAXjs', 
          'wp_ulike', 
          'smush-lazy-load', 
          'rank-math', 
          'kalybernew_js', 
          'cmplz-cookie', 
          'cmplz-cookie-config'
     );
     if ( in_array( $handle, $defer ) ) {
        return '<script src="' . $src . '" defer="defer"></script>' . "\n";
     }
       
       return $tag;
} 
add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );




// function add_rel_preload($html, $handle, $href, $media) {
//      if (is_admin())
//          return $html;
 
//       $html = <<<EOT
//  <link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
//  EOT;
//      return $html;
//  }
//  add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );



 
// Nav Menus
register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
));




// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

// Image Sizes
add_image_size('small', 600, 600, false);




// *** DEREGISTER GUTENBERG STYLES IF NOT LOGGED IN
if (!is_admin()) add_action("wp_enqueue_scripts", "kill_gutenberg_styles", 100);
function kill_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}




// *** GET RID OF DASHICONS IF YOU AREN'T LOGGED IN ***
function remove_dashicons() {
    if ( ! is_user_logged_in() ) {
          wp_dequeue_style('dashicons');
    }
}
add_action( 'wp_enqueue_scripts', 'remove_dashicons' );




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




// *** HIDE CONTENT EDITOR IN SOME PAGE TEMPLATES ***
add_action( 'admin_init', 'hide_editor' );
 
function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
    if($template_file == 'page__home-page.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}




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

// function crunchify_print_scripts_styles() {
//      // Print all loaded Scripts
//      global $wp_scripts;
//      foreach( $wp_scripts->queue as $script ) :
//          echo $script . '  **  ';
//      endforeach;
  
//      // Print all loaded Styles (CSS)
//      global $wp_styles;
//      foreach( $wp_styles->queue as $style ) :
//          echo $style . '  ||  ';
//      endforeach;
//  }
  
//  add_action( 'wp_print_scripts', 'crunchify_print_scripts_styles' );
 