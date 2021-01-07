<?php 
/*
Template Name: Softcar Home
*/
	get_template_part( 'template-parts/header', 'banner' ); 
	get_header(); 
?>
    <!-- =========================
         	About SECTION
    ========================= -->
    <?php if ( cs_get_option('who_we_title') || cs_get_option('who_we_image') ): ?>
   
    <section class="about_section sec_padding">
      	<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		        	<?php if ( cs_get_option('who_we_title') ): ?>
		          <div class="heading">
		            <h2><?php echo esc_html(cs_get_option('who_we_title')); ?></h2>
		            <p><?php echo esc_html(cs_get_option('who_we_content')); ?></p>
		          </div><!--/.heading -->
		          <?php endif ?>
		        </div><!--/.col-md-12 -->
		    </div><!--/.row -->

		    <div class="row">
		    	<div class="col-md-8 col-sm-8">
		    		<div class="about_content">
		    			<div class="row">

		    				<?php

                              $whos_we = cs_get_option('who_we_are_group');

                                if ( !empty($whos_we) ) {

                                foreach ( $whos_we as $who_we ) {
                              
                              ?>

		    				<div class="col-md-4">
		    					<div class="about_warp">
				    				<i class="<?php echo esc_html($who_we['who_we_icon']); ?>"></i>
				    				<h3><?php echo esc_html($who_we['who_we_con_title']); ?></h3>
				    				<p><?php echo esc_html($who_we['who_we_con_content']); ?></p>
			    				</div><!--/.about_warp -->
		    				</div>

		    				<?php } } ?>

		    			</div>
		    		</div><!--/.about_content -->
		    	</div><!--/.col-md-4 -->

		    	<div class="col-md-4 col-sm-4">
		    		<div class="about_content">
		    			<?php if ( cs_get_option('who_we_image') ): ?>
		    			<div class="about_warp">
		    				<img src="<?php echo esc_url(cs_get_option('who_we_image')); ?>" alt="about">
		    			</div><!--/.about_warp -->
		    			<?php endif ?>
		    		</div><!--/.about_content -->
		    	</div><!--/.col-md-4 -->
		    </div><!--/.row -->
      	</div><!--/.container -->
    </section><!--/.about_section -->
    <?php endif ?>
    <!-- =========================
         	Find SECTION
    ========================= -->
    <?php if ( cs_get_option('find_service_title') || cs_get_option('find_service_group') ): ?>
    	
    <?php endif ?>
    <section class="find_section sec_padding" style="background: url('<?php echo esc_html(cs_get_option('find_service_bg_image')); ?>'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<?php if ( cs_get_option('find_service_title') ): ?>
    				<div class="find_header">
    					<h2><?php echo esc_html(cs_get_option('find_service_title')); ?></h2>
    					<p><?php echo esc_html(cs_get_option('find_service_content')); ?></p>
    				</div><!--/.find_header -->
    				<?php endif ?>

    				<div class="find_tab">
    					<div class="find_tab_menu">
    						<ul  class="nav nav-pills nav-justified">

    							<?php

	                              $find_service = cs_get_option('find_service_group');

	                                $i = 0;

	                                if ( !empty($find_service) ) {

	                                foreach ( $find_service as $find_Single_service ) {

	                                	$i++;
	                              
	                              ?>

								<li class="<?php if($i==1){ echo "active"; }?>">
					        	<a  href="#<?php echo $i; ?>" data-toggle="tab" title="click here"><i class="<?php echo esc_html($find_Single_service['find_ser_con_icon']); ?>"></i><span><?php echo esc_html($find_Single_service['find_ser_con_title']); ?></span></a>
								</li>
								<?php } } ?>
								
							</ul>
    					</div><!--/.find_tab_menu -->
    					<div class="tab-content">
							<!-- Tab Pane 1 -->
							<?php

                              $find_service = cs_get_option('find_service_group');

                                $i = 0;

                                if ( !empty($find_service) ) {

                                foreach ( $find_service as $find_Single_service ) {

                                	$i++;
                              
                              ?>

						  	<div class="tab-pane  fade <?php if($i==1){ echo "in active"; }?>" id="<?php echo $i; ?>">
						  		<div class="tab_content_dts">
						  			<p><?php echo esc_html($find_Single_service['find_ser_content']); ?></p>
						  		</div><!--/.tab_content_dts -->
							</div><!-- /.tab-pane One -->

							<?php } } ?>
						</div><!-- Tab-Content -->
    				</div><!--/.find_tab -->
    			</div><!--/.col-md-12 -->
    		</div><!--/.row -->
    	</div><!--/.container -->
    </section><!--/.find_section -->
    <!-- =========================
         	Service SECTION
    ========================= -->
    <?php if ( cs_get_option('servic_sec_title') || cs_get_option('service_sec_group') ): ?>
    	
   
    <section class="service_section sec_padding">
    	<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		          <div class="heading">
		            <h2><?php echo esc_html(cs_get_option('servic_sec_title')); ?></h2>
		            <p><?php echo esc_html(cs_get_option('service_sec_content')); ?></p>
		          </div><!--/.heading -->
		        </div><!--/.col-md-12 -->
		    </div><!--/.row -->

		    <div class="row">

		    	<?php

                  $our_services = cs_get_option('service_sec_group');

                    if ( !empty($our_services) ) {

                    foreach ( $our_services as $our_service ) {
                  
                  ?>


		    	<div class="col-md-4 col-sm-4">
			    	<div class="service_content">
			    		<i class="<?php echo esc_html($our_service['servic_sec_con_icon']); ?>"></i>
			    		<h3><?php echo esc_html($our_service['ser_sec_con_title']); ?></h3>
			    		<p><?php echo esc_html($our_service['service_sec_con_conntent']); ?></p>
			    	</div><!--/.service-content -->
		    	</div><!--/.col-md-4 -->
		    	<?php } } ?>
		    	
		    </div><!--/.row -->
		</div><!--/.container -->
    </section><!--/.service_section -->
     <?php endif ?>
    <!-- =========================
         	Work SECTION
    ========================= -->
    <?php if ( cs_get_option('gallery_title') || cs_get_option('gallery_sec_group') ): ?>
    <section class="work_gallery_section sec_padding">
    	<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		        <?php if ( cs_get_option('gallery_title') ): ?>
		          <div class="heading">
		            <h2><?php echo esc_html(cs_get_option('gallery_title')); ?></h2>
		            <p><?php echo esc_html(cs_get_option('gallery_content')); ?></p>
		          </div><!--/.heading -->
		        <?php endif ?>
		        </div><!--/.col-md-12 -->
		    </div><!--/.row -->

		    <div class="row">

		    	<?php

                  $galleries = cs_get_option('gallery_sec_group');

                    if ( !empty($galleries) ) {

                    foreach ( $galleries as $gallery ) {
                  
                  ?>

		        <div class="col-md-3 col-sm-4 col_padding">
		            <div class="work_box">
		                <img src="<?php echo esc_url($gallery['gallry_image']); ?>" alt="img">
		                <div class="work_box_content">
		                    <a class="view" href="<?php echo esc_url($gallery['gallry_image']); ?>"><i class="icofont icofont-search-alt-1"></i></a>
		                    <h3><?php echo esc_html($gallery['gallery_title']); ?></h3>
		                    <?php if ( $gallery['gallery_author_name'] ): ?>
		                    <span>By <?php echo esc_html($gallery['gallery_author_name']); ?></span>
		                    <?php endif ?>
		                </div><!--/.work_box_content -->
		            </div><!--/.work_box -->
		        </div><!--/.col-md-3 -->
		        <?php } } ?>
		        
		    </div><!--/.row -->
		</div><!--/.container -->
    </section><!--/.work-gallery_section -->
    <?php endif ?>
    <!-- =========================
         	Client SECTION
    ========================= -->
    <?php if ( cs_get_option('client_group') || cs_get_option('client_bg_image') ): ?>
    <section class="client_section sec_padding" style="background: url('<?php echo esc_url(cs_get_option('client_bg_image')); ?>'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="client_slider owl-carousel owl-theme">

    					<?php

			              $clients = cs_get_option('client_group');

			                if ( !empty($clients) ) {

			                foreach ( $clients as $client ) {
			              
			              ?>

			              <?php if ( $client['client_image'] ): ?>
    					<div class="single-slider">
    						<i class="<?php echo esc_html($client['client_icon']); ?>"></i>
    						<p><?php echo esc_html($client['client_content']); ?></p>
    						<h5><?php echo esc_html($client['client_name']); ?></h5>
    						<span><?php echo esc_html($client['client_company']); ?></span>
    						<img src="<?php echo esc_url($client['client_image']); ?>" alt="img" class="img-responsive">
    					</div><!--/.single-slider -->
    					<?php endif ?>

    					<?php } } ?>

    				</div><!--/.client_slider -->
    			</div><!--/.col-md-12 -->
    		</div><!--/.row -->
    	</div><!--/.container -->
    </section><!--/.client_slider -->
    <?php endif ?>
    <!-- =========================
         Appoinment SECTION
    ========================= -->
    <?php if ( cs_get_option('appointment_title') || cs_get_option('appointment_image') ): ?>
    	
    <section class="appoinment_section sec_padding">
    	<div class="container">
    		<div class="row">
    			<?php if ( cs_get_option('appointment_title') ): ?>
    				
    			<div class="col-md-12">
    				<div class="heading">
			            <h2><?php echo esc_html(cs_get_option('appointment_title')); ?></h2>
			            <p><?php echo esc_html(cs_get_option('appoint_content')); ?></p>
		          	</div><!--/.heading -->
    			</div><!--/.col-md-12 -->
    			<?php endif ?>
    		</div><!--/.row -->

    		<div class="row">

    			<?php if ( cs_get_option('appointment_switch') ): ?>
    				
    			<div class="col-md-8 col-sm-8">
    				<div class="appoinment-from">
    					<form>
    						<div class="row">
			                    <div class="col-md-4 col-sm-4 appoinment_group">
			                      <input type="text" name="user" class="form-control" placeholder="name">
			                    </div>

			                    <div class="col-md-4 col-sm-4 appoinment_group">
			                      <input type="text" name="phone" class="form-control" placeholder="phone">
			                    </div>

			                    <div class="col-md-4 col-sm-4 appoinment_group">
			                      	<div class="select_box">
			                          <select>
			                            <option>car brand</option>
			                            <option>bmw</option>
			                            <option>ford</option>
			                            <option>toyota</option>
			                          </select>
			                        </div>
			                    </div>

			                    <div class="col-md-12 col-sm-12 appoinment_group">
			                      <textarea name="message" class="form-control message_box" placeholder="message"></textarea>
			                    </div>

			                    <div class="col-md-12 col-sm-12">
			                      <button type="submit">submit</button>
			                    </div>
			                </div><!-- /.row -->
    					</form>
    				</div><!--/.appoinment+_form -->
    			</div><!--/.col-md-8 -->
    			<?php endif ?>

    			<?php if ( cs_get_option('appointment_image') ): ?>
    			<div class="col-md-4 col-sm-4">
    				<div class="appoinment_thumbnail">
    					<img src="<?php echo esc_url(cs_get_option('appointment_image')); ?>" alt="img">
    				</div><!-- /.appoinment_thumbnail -->
    			</div><!--/.col-md-4 -->
    			<?php endif ?>
    		</div><!--/.row -->
    	</div><!--/.container -->
    </section><!--/.appoinment_section -->
    <?php endif ?>
    <!-- =========================
         Footer SECTION
    ========================= -->
    <?php get_footer(); ?>