<?php
/**
 * softcar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softcar
 */


/**  
 *
 * Codestar Framework  
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 */
require_once get_template_directory() .'/theme-options/cs-framework.php';

/**
 * widget.php
 */
require get_template_directory() . '/inc/widget.php';


/**
 * custom widget.php 
 */
require get_template_directory() . '/inc/widget/footer-form-widget.php';

/**
 * custom Search form widget
 */
require get_template_directory() . '/inc/widget/search-form-widget.php';


/**
 * Recent Post 
 */
require get_template_directory() . '/inc/widget/recent-post-widget.php';


/**
 * theme-support.php 
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Enqueue-scripts
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * theme shortcode
 */
require get_template_directory() . '/inc/theme-shortcode.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

