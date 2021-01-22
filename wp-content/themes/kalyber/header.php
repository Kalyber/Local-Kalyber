<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KalyberNew
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title><?php wp_title(''); ?></title>

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" as="font" rel="preload" type="font/woff2" crossorigin="anonymous">

	<?php do_action( 'wpseo_head' );  ?>

	<script>
	//document.domain = 'kalyber.com';
	</script>

	<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>

<?php
    if ( function_exists('insert_gtm_body') ) {
        insert_gtm_body();
    }
?>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main_content">Skip to content</a>

<header>
    <div class="header__inner">
        <a href="/" class="header__logo">
            <svg data-name="Layer 1" width="200" viewBox="0 0 720 131.62" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="a" x1="36.8" x2="86.2" y1="5.57" y2="128.87" gradientUnits="userSpaceOnUse">
                <stop stop-color="#e02826" offset="0"/>
                <stop stop-color="#0076bb" offset="1"/>
                </linearGradient>
            </defs>
            <path class="cls-1" d="m277.54 76.51a3 3 0 1 0 3 3 3 3 0 0 0 -3 -3z"/><path class="cls-2" d="m596.78 66.86v-4.68h23.67a2.34 2.34 0 1 1 0 4.68z"/><path class="cls-2" d="M620.45,66.58a2.14,2.14,0,0,0,2.11-2.11,2.12,2.12,0,0,0-2.11-2H597.07v4.12Z"/><path class="cls-2" d="M279.71,31.26a2.35,2.35,0,0,0-2.16-1.4,2.47,2.47,0,0,0-2.27,1.42L245.61,99.07a2.28,2.28,0,0,0,0,1.81,2.44,2.44,0,0,0,1.29,1.33,2.32,2.32,0,0,0,1,.21A2.36,2.36,0,0,0,250,101l27.51-62.88,27.52,62.9a2.23,2.23,0,0,0,2.15,1.4,2.56,2.56,0,0,0,1-.24,2.25,2.25,0,0,0,1.23-1.3,2.44,2.44,0,0,0,0-1.84Z"/><path class="cls-2" d="M384.85,97.66H350.18V32.26a2.35,2.35,0,0,0-2.4-2.4,2.43,2.43,0,0,0-2.4,2.4v67.79a2.43,2.43,0,0,0,2.4,2.4h37.07a2.34,2.34,0,0,0,2.39-2.4A2.42,2.42,0,0,0,384.85,97.66Z"/><path class="cls-2" d="M538.17,64.18l-1.34-.66,1.14-1A18.51,18.51,0,0,0,526,29.86H506.82v4.69H526a13.82,13.82,0,0,1,0,27.63H511.89v4.68h17.42a15.4,15.4,0,0,1,0,30.8H500.13V60.1h0V29.86h-2.38a2.35,2.35,0,0,0-2.4,2.4v67.79a2.35,2.35,0,0,0,2.4,2.4h31.57a20.17,20.17,0,0,0,8.86-38.27Z"/><path class="cls-2" d="M700.12,79.48l1.59-.44A25.06,25.06,0,0,0,695,29.86H681.54v4.69H695a20.36,20.36,0,0,1,0,40.72H674.8V35.51l0-.28V29.86h-2.37a2.35,2.35,0,0,0-2.4,2.4v67.79a2.4,2.4,0,1,0,4.79,0V80H694l21,21.78a2.1,2.1,0,0,0,1.68.71,2.3,2.3,0,0,0,1.66-.69,2.25,2.25,0,0,0,.73-1.63,2.5,2.5,0,0,0-.66-1.72Z"/><path class="cls-2" d="M458.41,30.21a2.17,2.17,0,0,0-1.26-.4,2.43,2.43,0,0,0-2,1.1l-21.3,31,0-.06-.2.41-2.14,4.58v33.23a2.43,2.43,0,0,0,2.4,2.4,2.34,2.34,0,0,0,2.39-2.4L436.19,67l22.92-33.37A2.43,2.43,0,0,0,458.41,30.21Z"/><path class="cls-2" d="M410.62,29.81a2.39,2.39,0,0,0-1.33.4,2.48,2.48,0,0,0-.61,3.39L427,60.32l2.4-5-16.7-24.4A2.46,2.46,0,0,0,410.62,29.81Z"/><path class="cls-2" d="m162.55 29.86a2.35 2.35 0 0 0 -2.4 2.4v67.79a2.4 2.4 0 1 0 4.79 0v-22.42-0.28-45.09a2.34 2.34 0 0 0 -2.39 -2.4z"/><path class="cls-2" d="M175.1,64.57l30.68-30.68a2.45,2.45,0,0,0,0-3.34,2.61,2.61,0,0,0-3.5,0L171.68,61.16v6.71l9.71,9.71,0,0,24.11,24.19a2.37,2.37,0,0,0,1.74.66,2.32,2.32,0,0,0,1.63-.66,2.46,2.46,0,0,0,.74-1.77,2.24,2.24,0,0,0-.75-1.6Z"/><path class="cls-2" d="M631.85,34.55a2.41,2.41,0,0,0,2.4-2.29,2.43,2.43,0,0,0-2.4-2.4H587.61a2.35,2.35,0,0,0-2.4,2.4v67.79a2.35,2.35,0,0,0,2.4,2.4h44.24a2.43,2.43,0,0,0,2.4-2.4,2.49,2.49,0,0,0-2.4-2.39H590V66.86h0v-4.4l0-.28V34.55Z"/><path class="cls-3" d="M129.24,79.64A47.8,47.8,0,0,1,127,88.22l-.73-.25A63.82,63.82,0,0,0,129.24,79.64ZM124.8,93.76l-.88-.44-.23.45a63.73,63.73,0,0,1-12.35,16.28l-.76.72,1.52,1.52.72-.76a65.07,65.07,0,0,0,11.76-17.32Zm-18.83,24-1.48-2-1,.74a62.42,62.42,0,0,1-8.76,5.12l-1.31.63,1.32,2.63L96,124.2a64.9,64.9,0,0,0,9-5.64ZM77.59,130.55l-.49-3.48-1.77.22a63.87,63.87,0,0,1-10.06.43l-1.95-.07-.08,3.95h1.94a66.55,66.55,0,0,0,10.65-.79Zm-21,.48.75-4.07-2-.39a62,62,0,0,1-18.75-6.91l-2-1.12-2.22,4,2,1.08a65.74,65.74,0,0,0,20.18,7.07ZM27.19,119.15l2.89-3.65L28.25,114A61.89,61.89,0,0,1,21,107.22l-1.6-1.75-3.5,3.2,1.61,1.74a67.3,67.3,0,0,0,7.89,7.3ZM6.66,94.71l4.41-2-1-2.22A64.08,64.08,0,0,1,6.8,81.11l-.63-2.34L1.5,80l.6,2.35A63.09,63.09,0,0,0,5.66,92.5ZM.37,74.13l4.79-.44L5,71.29l-.24-5a46.31,46.31,0,0,1,.08-5,63.51,63.51,0,0,1,1.44-9.9l.52-2.28L2.3,48.05l-.54,2.28A67.16,67.16,0,0,0,.16,61,50.86,50.86,0,0,0,0,66.35l.24,5.38ZM4.23,42.2,8.45,44l.85-2.1a62.43,62.43,0,0,1,4.48-9L14.91,31l-3.67-2.27L10.08,30.6a66.2,66.2,0,0,0-5,9.52ZM22.7,15.86l2.55,3.05,1.48-1.27a62.29,62.29,0,0,1,8.13-6l1.53-.93-1.8-3L33,8.61a65.9,65.9,0,0,0-8.81,6ZM41.17,4.67l1.19,3.07,1.5-.61A62.52,62.52,0,0,1,63.57,2.61l1.28-.08L64.73,0,63.45,0A65.65,65.65,0,0,0,42.69,4.1ZM73,.47l-.25,2.15,1.05.09A62.71,62.71,0,0,1,83.85,4.4l.76.2L85,3.14l-.75-.23A63.82,63.82,0,0,0,74,.62ZM94.6,7.08l-.38.8a111.77,111.77,0,0,1,12.53,7.47A63.57,63.57,0,0,0,94.6,7.08Zm22.82,78.75,1,.39a50.18,50.18,0,0,0,3.41-15.48S120.28,79.76,117.42,85.83ZM113.2,97.59l-1.7-1.22-.69.83-2.43,3-.76.93,1.9,1.58.71-1,2.34-3.22Zm-4.65,6.21-1.83-1.75-1,.88L103,105.52l-1,1,1.92,2.11,1-1,2.8-2.85Zm-10.17,9.13-1.69-2.69-1.4.84a56.28,56.28,0,0,1-8.47,4.15l-1.69.65,1.39,3.41,1.66-.71A56.6,56.6,0,0,0,97,113.83Zm-27.7,10-.14-4.17A58.13,58.13,0,0,1,55,117.59L54.24,122A47.3,47.3,0,0,0,70.68,123Zm-21.86-2.4,1.61-4.36-2.19-.82a52.89,52.89,0,0,1-8.43-4l-2-1.2-2.39,4.1,2,1.19a58,58,0,0,0,9.21,4.3ZM23.44,104.35l3.75-3.12a56.12,56.12,0,0,1-8.9-13.29l-4.24,2.21S17.64,98.91,23.44,104.35ZM12.07,85.11l4.53-1.43-.72-2.25a53.54,53.54,0,0,1-2-9.11L13.54,70l-4.61.59.29,2.32a57.27,57.27,0,0,0,2.15,9.93ZM9.8,54.8l4.19.94a108,108,0,0,1,4.73-14.59L15.2,39.52A66.21,66.21,0,0,0,9.8,54.8Zm8.72-20.67,3,2.11,1-1.5a55.85,55.85,0,0,1,5.93-7.36l1.11-1.17L27.34,24,26.17,25.1a54.61,54.61,0,0,0-6.59,7.57ZM41.68,14.49l1,2.11,1-.47,3.48-1.6.92-.42-.7-1.83-.94.36-3.71,1.44Zm7.69-2.81.53,1.75.85-.26,3.68-1.09.74-.22-.33-1.45-.75.17-3.85.9ZM63.5,9.61l0,.84.4,0,2.28-.15c.76,0,1.52,0,2.28,0l4.6.06-4.58-.47c-.77-.06-1.53-.18-2.3-.2l-2.31-.05Zm48.74,49.93c.13,1.6.18,3.21.16,4.82s-.23,3.19-.32,4.79l0,.87,1.8.14v-.87c0-1.66.08-3.32,0-5a48,48,0,0,0-.58-4.91A44.17,44.17,0,0,0,110.46,50,48,48,0,0,1,112.24,59.54Zm.4,18.43-2.27-.68L110,78.45a45.58,45.58,0,0,1-9.45,16.21L99.39,96l2.67,2.3,1.11-1.33a47.35,47.35,0,0,0,9.16-17.78ZM97.44,102.8l-2.28-3-1.56,1.13a45.39,45.39,0,0,1-16.84,7.65l-2.16.48,1,4.36,2.15-.53A47.49,47.49,0,0,0,95.94,104ZM70,114.23l-.1-4.63-2.33,0a44.37,44.37,0,0,1-18.06-3.51l-2.22-.95-1.88,4.46,2.23.93a48.81,48.81,0,0,0,20,3.72ZM40.62,107l2.79-4-2-1.38A44.45,44.45,0,0,1,28.78,88.3l-1.22-2-4,2.43,1.21,2a49.25,49.25,0,0,0,13.87,14.91ZM21.21,83.59l4.33-1.5c-4-10.68-3.28-22.46-3.28-22.46l-3.91-.33A51.64,51.64,0,0,0,21.21,83.59ZM19.8,53.1l3.53,1.08.49-1.75a46.17,46.17,0,0,1,8.66-16.6l.85-1-1.95-1.69-.9,1A46.76,46.76,0,0,0,20.35,51.38Zm17.37-25,1.26,1.67.79-.64a47.62,47.62,0,0,1,17-8.8l.18-.06-.08-.36-.19,0A45,45,0,0,0,38,27.51ZM82.48,97.25a36.29,36.29,0,0,1-18.19,2.94l-2-.21L62,104.22l2,.07a38.68,38.68,0,0,0,10.19-1,36.3,36.3,0,0,0,9.44-3.7,35.17,35.17,0,0,0,13.82-14A39.5,39.5,0,0,1,82.48,97.25ZM56,103.14,57.45,99l-2.11-.78A35.85,35.85,0,0,1,32.56,71.7l-.46-2.22-4.36.79.36,2.24a38.12,38.12,0,0,0,25.78,29.95ZM27.57,64.27l4.24.35.11-2.07a35.29,35.29,0,0,1,1.67-9.08A36.94,36.94,0,0,1,37.54,45a38.22,38.22,0,0,1,6-7.32,39.8,39.8,0,0,1,7.75-5.76h0l0,0h0A34.92,34.92,0,0,0,35.37,43.49a36.39,36.39,0,0,0-5.07,8.79,38.5,38.5,0,0,0-2.5,9.93Z"/>
            <circle class="cls-1" cx="66.59" cy="65.47" r="12.08"/>
            </svg>
        </a>

        <div class="sticky-nav__anchors">
            <?php
                wp_nav_menu( array( 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'menu__header-menu' ) ); 
            ?>
        </div>

        <div id="hambBut"  class="header__hamburger"><!-- Hamburger animation stuff -->
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>
</header>

<div id="header__mobile-nav">
    <?php
        wp_nav_menu( array( 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'menu__header-menu' ) ); 
    ?>
</div>

<div id="main_content" class="page__container">