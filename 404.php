<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package softcar
 */

get_header();
?>

<section class="error_section sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error_content text-center">

                    	<h2>404</h2>

						<section class="error-404 not-found">
							<header class="page-header">
								<span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'softcar' ); ?></span>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'softcar' ); ?></p>

								<?php
								?>
									<form action="" method="post">
			                            <div class="col-md-6 col-md-offset-3 error_group col-sm-12">
			                                <input type="search" name="s" class="form-control" value="" placeholder="Search here...."  required/>
			                                <button type="submit">search</button>
			                            </div>
			                        </form>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
