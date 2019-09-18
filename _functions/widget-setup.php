<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function accufleet_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'accufleet' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'accufleet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'accufleet' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'accufleet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'accufleet' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'accufleet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'accufleet' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'accufleet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 4', 'accufleet' ),
		'id'            => 'footer-sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'accufleet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'accufleet_widgets_init' );
