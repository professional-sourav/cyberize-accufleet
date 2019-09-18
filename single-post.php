<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="general-page-header" class="d-flex justify-content-center align-items-center <?php echo (is_user_logged_in()) ? 'mt-50' : ''; ?>">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	<h1 class="page-title"><?php the_field('blog_index_title', 'option') ?></h1>
</section>

<div id="primary" class="content-area">
	<!-- <div class="row"> -->
		<main id="main" class="site-main">

			<!-- Blue block under the header when no content -->
			<section id="gc-single-post" class="general-page-header"></section>

			<div class="container">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'post-single-accufleet' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
				?>

				<?php

				endwhile; // End of the loop.

				?>

			</div>

		</main><!-- #main -->

	<!-- </div> END ROW -->
</div><!-- #primary -->



<?php
get_footer();
