<?php
/**
 *
 * MODULE: Blog Index AccuFleet
 *
 */
?>
<section id="general-page-header" class="d-flex justify-content-center align-items-center <?php echo (is_user_logged_in()) ? 'mt-50' : ''; ?>">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	<h1 class="page-title"><?php the_field('blog_index_title', 'option') ?></h1>
</section>

<main id="" class="blog-index-block-accufleet">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container-full">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">

						<article class="post-item-container">

							<?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>

									<?php
									endif;
									?>

									<div class="row">

										<?php
										/* Start the Loop */
										while ( have_posts() ) : the_post();

											/*
											 * Include the Post-Format-specific template for the content.
											 * If you want to override this in a child theme, then include a file
											 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
											 */
										?>
										<div class="col-12 col-sm-6 col-md-6 col-lg-6">
											<?php
											get_template_part( 'template-parts/content', 'post-item-accufleet' );

											?>
										</div>

										<?php

										endwhile;

										?>
									</div>
									<?php

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
							?>

						</article>

					</div> <!-- 9 COLS END -->

					<div class="col-sm-12 col-md-12 col-lg-4">

						<?php get_sidebar(); ?>

					</div> <!-- 3 COLS END -->

				</div> <!-- ROW END -->



			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


</main>
