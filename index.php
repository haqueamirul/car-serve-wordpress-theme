<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softcar
 */

get_header();
?>

<section class="blog_section sec_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-7">

          	<div class="row">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;


				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</div>
					<div class="blog_pagination">
		                <div class="pagination_content text-center">
		                    <?php 
								the_posts_pagination(array(
									'show_all' => false,
									'prev_text' => 'PREV',
									'next_text' => 'NEXT',
									'screen_reader_text' => ' '

									));

							?>
		                </div><!-- /.pagination_content -->
		            </div><!-- /.blog_pagination -->
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
