<?php
/**
 *
 * MODULE: Archive Index AccuFleet
 *
 */
?>
<section id="general-page-header" class="d-flex justify-content-center align-items-center">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	<h1 class="page-title"><?php wp_title(''); ?></h1>
</section>

<section class="archive-index-accufleet">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container-full">

				<div class="row">


					<div class="col-sm-12 col-md-12 col-lg-9">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
									<?php
										// the_archive_title( '<h4 class="archive-type">', '</h4>' );
										//the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								<!-- <div class="long-underline"></div>	 -->

							</header><!-- .page-header -->

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

						endif; ?>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-3">

						<?php get_sidebar(); ?>

					</div>

				</div> <!-- End Row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- end primary -->

</section>
