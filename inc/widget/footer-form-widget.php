<?php

Class softcar_footer_form_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('softcar_footer_widget','Softcar Footer Form Widget', array(
			'description' => 'Add event widget your site.'
		));
	}
	public function widget($args, $instance){ ?>

		<?php echo $args['before_widget']; ?>
                <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
                <form>
					<div class="row">
	                    <div class="col-md-12 col-sm-12 newsletter_group">
	                      <input type="text" name="user" class="form-control" placeholder="your name">
	                	</div>
	                	<div class="col-md-12 col-sm-12 newsletter_group">
	                      <input type="email" name="email" class="form-control" placeholder="your email">
	                	</div>
	                	<div class="col-md-12 col-sm-12">
	                      <button type="submit">send</button>
	                    </div>
	            	</div>
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

function softcar_widget_form(){
	register_widget('softcar_footer_form_widget');
}
add_action('widgets_init','softcar_widget_form');