<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softcar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 	<!-- =========================
         HEADER SECTION
    ========================= -->
    <header id="sticky_header">
      <div class="container">
        <nav class="navbar">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar9">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            
            <div class="brand-centered">
            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(cs_get_option('main_logo')); ?>" alt="logo"></a>
            </div>
            
            <div id="navbar9" class="navbar-collapse collapse">

              
              <?php
				wp_nav_menu( array(
					'theme_location'    => 'left-menu',
					'depth'             => 3,
					'container'         => 'div',
					'menu_class'        => 'nav navbar-nav navbar-left',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
			?>

			<?php
				wp_nav_menu( array(
					'theme_location'    => 'right-menu',
					'depth'             => 3,
					'container'         => 'div',
					'menu_class'        => 'nav navbar-nav navbar-right',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
			?>
            </div><!--/.nav-collapse -->
        </nav>
      </div><!--/.container -->
    </header>