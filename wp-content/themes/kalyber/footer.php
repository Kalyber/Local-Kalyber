<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KalyberNew
 */
?>

	<?php
		$categories_list = get_the_category(get_the_ID(), array(
			'orderby' => 'name',
			'order' => 'ASC'
		) );

		function category($var){
			return esc_html($val -> name);
		}

		$category_names = array_map("category", $categories_list);

		$id = get_the_ID();
		$page_name = get_the_title(); //basename(get_permalink());
		$page_template = basename(get_page_template());
		$categories = implode(', ', $category_names);
		$postTags = get_the_tags();
		$tagsList = [];
		if ($postTags) {
			foreach($postTags as $tag) {
				array_push($tagsList, $tag->name);
			}
		}

		$tags = implode(', ' ,$tagsList);

		if( get_field('show_form', $id) ):
			if ( !is_404() ):
				get_template_part('template-parts/section','flyoutcontactus');
			endif;
		endif;
	?>




</div><!-- / page__container -->

<footer>
	<div class="footer__inner">
		<div class="footer__text">
			&copy; <?php echo date("Y"); ?> Kalyber <span class="footer__break-span">•</span> 888.525.9237 • <a href="mailto:hello@kalyber.com">hello@kalyber.com</a> <span class="footer__break-span">•</span> <a href="/privacy-policy/">Privacy</a> • <a href="/terms-and-conditions/">Terms & Conditions</a>
		</div>
		<div class="footer__social-links">
			<a href="https://www.linkedin.com/company/kalyber" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><title>Kalyber LinkedIn Page</title><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/></svg></a>
			<a href="https://twitter.com/KalyberHQ" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><title>Kalyber Twitter Page</title><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/></svg></a>
			<a href="https://www.facebook.com/kalyberHQ" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><title>Kalyber Facebook Page</title><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg></a>
		</div>
	</div>

	<div class="page-info" style="height:0px;">
		<input style="height:0px;border:none;padding:0;" id="categories" type="hidden" value="<?=$categories?>" />
		<input style="height:0px;border:none;padding:0;" id="is404" type="hidden" value="<?=is_404(); ?>" />
		<input style="height:0px;border:none;padding:0;" id="lastUpdated" type="hidden" value="<?=the_modified_date(); ?>" />
		<input style="height:0px;border:none;padding:0;" id="pageId" type="hidden" value="<?=$id?>" />
		<input style="height:0px;border:none;padding:0;" id="pageName" type="hidden" value ="<?=$page_name?>" />
		<input style="height:0px;border:none;padding:0;" id="pageTemplate" type="hidden" value="<?=$page_template?>" />
		<input style="height:0px;border:none;padding:0;" id="tags" type="hidden" value="<?=$tags?>" />
	</div>
</footer>


<?php wp_footer(); ?>


</body>
</html>
