<?php

Class softcar_search_form_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('softcar_Search_widget','Softcar Search Form Widget', array(
			'description' => 'Add event widget your site.'
		));
	}
	public function widget($args, $instance){ ?>


		<?php echo $args['before_widget']; ?>
          <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
        </div><!-- /.category_header -->
        <div class="single_search">
        <form action="" method="post">
          <input type="search" class="form-control" name="s" value="" placeholder=""  required/>
           <button type="submit"><i class="icofont icofont-search"></i></button>
        </form>
        <?php echo $args['after_widget'];

		

	}
	public function form($value){ ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $value['title']; ?>" class="widefat">
		</p>
		

<?php }
}

function softcar_widget_searchform(){
	register_widget('softcar_search_form_widget');
}
add_action('widgets_init','softcar_widget_searchform');