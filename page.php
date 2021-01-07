<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softcar
 */

get_header();  
?>

<section class="single_section sec_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="post_header">
              <ul>
                <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e('home','softcar'); ?></a></li>
                <li><?php the_title(); ?></li>
              </ul>    
            </div><!-- /.post_header -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>
		<?php get_sidebar(); ?>
	  </div>
	</div>
</section>

<?php
get_footer();
