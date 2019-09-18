<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gulfcoast
 */

get_header();
?>
	<style type="text/css">

	</style>

	<div id="primary" class="content-area thank-you-page">
		<main id="main" class="site-main container">

			<div class="page-content text-center">

				<img src="<?php echo get_template_directory_uri() . '/assets/img/thank-you-art.png' ?>" class="image image-art">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/thank-you.png' ?>" class="image image-text">
				<p>Your lore ipsum was processed successfully!</p>
				<div class="buttongo-back">
					<a href="/">Go Back</a>
				</div>
			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
