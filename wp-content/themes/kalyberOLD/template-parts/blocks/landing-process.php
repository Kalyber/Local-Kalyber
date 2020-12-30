
<?php

/**
 *  Block Template.
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
// $className = 'light-blue-bg';
// if( !empty($block['className']) ) {
//     $className .= ' ' . $block['className'];
// }
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }

// Load values and assign defaults.

$svg = get_field('process_svg') ?: 'Link Text';
$text = get_field('text') ?: 'Text';
$link = get_field('link') ?: 'Link';
$linkText = get_field('link_text') ?: 'Link Text';

//$image = get_field('banner_image') ?: 295;
//$background_color = get_field('background_color');
//$text_color = get_field('text_color');

?>



	<section id="<?php echo esc_attr($id); ?>" class="process">
		<div class="max-width">
			<div class="row text-center">
				<div class="col-12">
				<?php echo $svg; ?>
					
				</div>

			</div>
			<div class="row text-center">
			<?php echo $text; ?>
			

				<div class="col-12">
				<?php if($link != ""){?>
				    <a href="<?php echo $link; ?>" class="button blue center"><span><?php echo $linkText; ?></span></a>
                <?php } ?>
				</div>
			</div>
			


		</div>
	</section>