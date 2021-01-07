<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function softcar_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'softcar' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'softcar' ),
		'before_widget' => '<div class="col-md-3 col-sm-3 col-xs-12"><div class="footer-widget footer-menu">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'softcar' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'softcar' ),
		'before_widget' => '<div class="blog_category"><div class="category_header">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'softcar_widgets_init' );
