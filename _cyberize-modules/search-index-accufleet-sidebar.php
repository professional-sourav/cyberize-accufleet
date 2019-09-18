<?php
/**
 *
 * MODULE: Search Index AccuFleet w Sidebar
 */
?>
<section id="general-page-header" class="d-flex justify-content-center align-items-center">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	<h1 class="page-title"><?php wp_title(''); ?></h1>
</section>

<section class="search-index-accufleet">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container-full">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-9">

						<main id="main" class="site-main">

							<?php
							if ( have_posts() ) : ?>

								<header class="page-header">
									<h4 class="search-type"><?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'moose-framework-2' ), '<span>' . get_search_query() . '</span>' );
									?></h4>
								</header><!-- .page-header -->

								<div class="row">

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
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

						</main><!-- #main -->

					</div>

					<div class="col-sm-12 col-md-12 col-lg-3">

						<?php get_sidebar(); ?>

					</div>

				</div> <!-- end row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- End Primary -->


</section>
