<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
	</div><!-- #content -->

	<!-- MAIN FOOTER -->
	<footer id="footer-accufleet" class="site-footer">

		<div class="ac-footer-bottom">
			<?php if ( !is_404() ): ?>
			<div class="container">
				<div class="ac-site-logo-bottom">
					<img src="<?php the_field('footer_site_logo', 'option') ?>" alt="">
				</div>
			</div>
			<?php endif; ?>
			<div class="bottom-container">
				<div class="container footer-sidebar-menu">
					<div class="footer-sidebar-menu">
						<?php
							if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
							}
						?>
					</div>
					<div class="gc-social-icons-inline">
						<ul>
							<li><a href="<?php the_field('gc_facebook_link', 'option') ?>" target="_blank"></a><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></li>
							<li><a href="<?php the_field('gc_twitter_link', 'option') ?>" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="<?php the_field('gc_linkedin_link', 'option') ?>" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- START FOOTER BOTTOM -->
		<div class="ac-footer-below">
			<div class="container">
				<div class="copyright">
					<div class="">
						<div class="copy-right-text">
							<?php the_field('theme_footer_text', 'option') ?>
						</div>

						<!--<a class="float-right" target="_blank" href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
							printf( esc_html__( 'Premium support & maintenance by %s', 'moose-framework-2' ), 'CyberizeFramework' );
						?></a>-->
					</div>
				</div>
			</div>
		</div>
		<!-- END FOOTER BOTTOM -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--===========================================
=            CUSTOM ANALYTICS TAGS - FOOTER     =
============================================-->

	<?php the_field('before_bottom_body_tag_default', 'option'); ?>

	<?php the_field('before_bottom_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

</body>
</html>
