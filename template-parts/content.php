<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softcar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-md-12">
		<div class="blog_single">
	    	<div class="blog_thumbnail">
	    		<?php the_post_thumbnail(); ?>
	    	</div><!-- /.blog_thumbnail -->
	    	<div class="blog_content">
	    		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    		<ul>
	              <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><i class="icofont icofont-man-in-glasses"></i><?php the_author(); ?></a></li>
	              <li><i class="icofont icofont-ui-calendar"></i><?php the_date('M d, Y'); ?></li>
	              <li><i class="icofont icofont-ui-text-chat"></i><?php comments_popup_link('No Comment','One Comment','% comments','author','comment off'); ?></li>
	            </ul>
	            <p><?php echo sExcerpt('30'); ?></p>
	    	</div><!-- /.blog_content -->
	    </div><!-- /.blog_single -->
	</div><!-- /.col-md-12 -->

</article><!-- #post-<?php the_ID(); ?> -->
