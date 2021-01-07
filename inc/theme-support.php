<?php
/**
 * softcar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softcar
 */

if ( ! function_exists( 'softcar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function softcar_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on softcar, use a find and replace
		 * to change 'softcar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'softcar', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
			// file does not exist... return an error.
			return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
		} else {
			// file exists... require it.
		    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
		}

		// wp_nav menu

		register_nav_menus( array(
		    'left-menu' => __( 'Left Menu', 'softcar' ),
		    'right-menu' => __( 'Right Menu', 'softcar' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'softcar_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'softcar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function softcar_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'softcar_content_width', 640 );
}
add_action( 'after_setup_theme', 'softcar_content_width', 0 );


//Custom Exerpt

function sExcerpt($number = 20, $readmore = 'Learn More'){
 	$newnumber = $number + 1;
 	$var = explode(' ', strip_tags(get_the_content()), $newnumber);
 	if (count($var) >= $newnumber) {
 		array_pop($var);
 	}

 	array_push($var, '
 		<div class="join_button text-left">
 		<a class="btn btn-default btn-welcome"  href="'.get_the_permalink().'"><span>'.$readmore.' </span></a>
 		</div>
 		');
 	$var = implode(' ', $var);

 	return $var;
 }



 function xExcerpt($number = 20, $readmore = 'Learn More'){
 	$newnumber = $number + 1;
 	$var = explode(' ', strip_tags(get_the_content()), $newnumber);
 	if (count($var) >= $newnumber) {
 		array_pop($var);
 	}

 	
 	$var = implode(' ', $var);

 	return $var;
 }