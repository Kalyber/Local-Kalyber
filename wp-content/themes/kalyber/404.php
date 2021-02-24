<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package KalyberNew
 */

get_header();
?>

<?php get_template_part('template-parts/components/hero-interior'); ?>

<div class="generic-bar--blue">
	<div class="container">
		<h2>Page Not Found</h2>
	</div>
</div>

<div class="container">
	<p>What you're looking for isn't a thing that exists. Like bigfoot. Or sharknados. Or flying cars, which really makes us angry. Weren't we promised flying cars?</p>

	<p>But you might be interested in things that do exist. Like these fine blog posts:</p>

	<div style="height:50px;"></div>

	<div class="generic-ul-list">
		<ul>
			<li><a href="/marketing/seo-audit-what-marketers-need-to-know/">SEO Audit - What Marketers Need to Know</a></li>
			<li><a href="/content-management/wordpress-for-the-enterprise-a-guide-for-marketers/">WordPress for the Enterprise — A Guide for Marketers</a></li>
			<li><a href="/marketing/top-wordpress-plugins-for-marketers/">Top WordPress Plugins For Marketers</a></li>
		</ul>
	</div>

	<div style="height:380px;"></div>
</div>

<?php
get_footer();
