<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>

<div id="primary" class="content-area error-404-page-area">
	<main id="main" class="site-main container">

		<div class="page-content text-center">

			<img src="<?php echo get_template_directory_uri() . '/assets/img/404-art.png' ?>" class="image image-art">

			<img src="<?php echo get_template_directory_uri() . '/assets/img/404.png' ?>" class="image image-txt">
			<h2 class="error-title">Page Not Found</h1>
			<p class="error-description">Unfortunately the page you were looking for could not be found.</p>

			<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
				<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
			<?php endif; ?>

			<div class="buttongo-back">
				<a href="/">Go Back</a>
			</div>

		</div><!-- .page-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
