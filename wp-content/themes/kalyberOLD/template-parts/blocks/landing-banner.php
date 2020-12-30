
<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
// $className = 'testimonial';
// if( !empty($block['className']) ) {
//     $className .= ' ' . $block['className'];
// }
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }

// Load values and assign defaults.
$title = get_field('banner_title') ?: 'Banner Title';
$text = get_field('banner_description') ?: 'Banner Text';
$image = get_field('banner_image') ?: 295;
$link = get_field('banner_link');
$linkText = get_field('banner_link_text') ?: 'Banner Link Text';
//$background_color = get_field('background_color');
//$text_color = get_field('text_color');

?>



<div  id="<?php echo esc_attr($id); ?>" class="default-no-wave__hero" style="background-image: url('<?php echo $image; ?>')">
		<div class="default-no-wave__hero--text"> 
			<div class="max-width">
				<h1><?php echo $title; ?></h1>
				
				<p>
                <?php echo $text; ?>
				</p>
                <?php if($link != ""){?>
				    <a href="<?php echo $link; ?>" class="button white-ol center"><span><?php echo $linkText; ?></span></a>
                <?php } ?>

			</div>
		</div>
	</div>