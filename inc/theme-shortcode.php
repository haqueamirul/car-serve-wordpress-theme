<?php
/* ==============================================================================
// About Page First section
================================================================================*/
function about_section_one($attr){


	extract( shortcode_atts( array(
      'header_logo'    => '',
      'banner_title' => '',
      'banner_subtitle' => '',
      'banner_con_title' => '',
    ), $atts ) );

		


	ob_start(); ?>


		<section class="banner_section" style="background: url('<?php header_image(); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="banner_table">
		                    <div class="banner_table_cell">
		                        <div class="banner_header">
		                            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo do_shortcode( $attr['header_logo'] ); ?>" alt="banner_logo"></a>
		                            <h1><?php echo do_shortcode( $attr['banner_title'] ); ?></h1>
		                            <span><?php echo do_shortcode( $attr['banner_subtitle'] ); ?></span>
		                        </div><!-- /.banner_header -->


		                        <div class="row">


		                            <div class="col-md-4 col-sm-4">
		                                <div class="banner_contact">
		                                    <i class="icofont icofont-location-pin"></i>
		                                    <h4><?php do_shortcode( $attr['banner_con_title'] ); ?></h4>
		                                    <p>london, uk</p>
		                                    <p>10, first avenue, muswell hill</p>
		                                </div><!-- /.banner_contact -->
		                            </div><!--/.col-md-4 -->

		                        </div><!--/.row -->


		                    </div><!-- /.banner_table_cell -->
		                </div><!-- /.banner_table -->
		            </div><!-- /.col-md-12 -->
		        </div><!--/.row -->
		    </div><!--/.container -->
		</section>

	<?php
	return ob_get_clean();

}
add_shortcode('header_banner_section','about_section_one');



