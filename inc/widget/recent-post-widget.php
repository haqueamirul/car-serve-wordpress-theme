<?php

Class softcar_recent_post_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('softcar_recent_post','Softcar Recent Post Widget', array(
			'description' => 'Add event widget your site.'
		));
	}
	public function widget($args, $instance){ ?>

		<div class="blog_category">
        <div class="category_header">
          <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
        </div>
        <!-- Item 1 -->
       <?php
       		$recenpost = new WP_Query(array(
       			'post_type'      =>'post',
       			'posts_per_page' => 3
       		));

       		while ( $recenpost->have_posts() ) : $recenpost->the_post(); 
       ?>
        <div class="recent_section">
          <div class="recent_thumbnail">
            <?php the_post_thumbnail(); ?>
          </div><!-- /.recent_thumbnail -->
          <div class="recent_content">
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo xExcerpt('15'); ?></p>
          </div><!-- /.recent_content -->
        </div><!-- /.recent_section -->
    	<?php endwhile; ?>

      </div><!-- /.blog_category -->


		<?php	

	}
	public function form($value){ ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $value['title']; ?>" class="widefat">
		</p>
		

<?php }
}

function softcar_widget_recent_post(){
	register_widget('softcar_recent_post_widget');
}
add_action('widgets_init','softcar_widget_recent_post');