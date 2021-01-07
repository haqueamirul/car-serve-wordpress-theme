<?php

/**
 * Enqueue scripts and styles.
 */
function softcar_scripts() {
	wp_enqueue_style( 'softcar-style', get_stylesheet_uri() );
	wp_enqueue_style( 'softcar-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'softcar-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'softcar-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'softcar-icofont', get_template_directory_uri() . '/css/icofont.css');
	wp_enqueue_style( 'softcar-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'softcar-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'softcar-owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.css');
	wp_enqueue_style( 'softcar-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'softcar-responsive', get_template_directory_uri() . '/css/responsive.css');

	/**
	 * Load our IE-only stylesheet for all versions of IE:
	 * <!--[if IE]> ... <![endif]-->
	 */
	 // Internet Explorer HTML5 support 
    wp_enqueue_script( 'medisoft-2-html5shiv','https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'medisoft-2-html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'medisoft-2-respond','https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'medisoft-2-respond', 'conditional', 'lt IE 9' );




	wp_enqueue_script( 'softcar-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softcar-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softcar-jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );
	wp_enqueue_script( 'softcar-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softcar-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softcar-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softcar-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );


	wp_enqueue_script( 'softcar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'softcar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'softcar_scripts' );