<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softcar
 */

?>

	<footer>
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
        </div>
        <div class="footer-bottom">
	        <div class="row">
	            <div class="col-xs-12">
	              <div class="copyright">
	                <h4>&copy; <?php echo esc_html(cs_get_option('copyright_text')); ?> <a href="<?php echo esc_html(cs_get_option('company_link')); ?>"><?php echo esc_html(cs_get_option('copany_name')); ?></a></h4>
	              </div>
	            </div>
	          </div>
	        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>