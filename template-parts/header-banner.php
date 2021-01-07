<!-- =========================
     Banner SECTION
========================= -->
<?php if ( cs_get_option('header_top_logo') || cs_get_option('header_top_title') ): ?>

<section class="banner_section" style="background: url('<?php header_image(); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_table">
                    <div class="banner_table_cell">
                        <div class="banner_header">
                            <?php if ( cs_get_option('header_top_logo') ): ?>
                                
                            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(cs_get_option('header_top_logo')); ?>" alt="banner_logo"></a>
                            <?php endif ?>
                            <h1><?php echo esc_html(cs_get_option('header_top_title')); ?></h1>
                            <span><?php echo esc_html(cs_get_option('header_top_subtitle')); ?></span>
                        </div><!-- /.banner_header -->

                        <div class="row">

                            <?php

                              $header_services = cs_get_option('header_top_group');

                                if ( !empty($header_services) ) {

                                foreach ( $header_services as $header_service ) {
                              
                              ?>

                            <div class="col-md-4 col-sm-4">
                                <div class="banner_contact">
                                    <i class="<?php echo esc_html($header_service['header_top_icon']); ?>"></i>
                                    <h4><?php echo esc_html($header_service['header_top_ser_title']); ?></h4>
                                    <p><?php echo esc_html($header_service['header_ser_text1']); ?></p>
                                    <p><?php echo esc_html($header_service['header_ser_text2']); ?></p>
                                </div><!-- /.banner_contact -->
                            </div><!--/.col-md-4 -->

                            <?php } } ?>

                    </div><!-- /.banner_table_cell -->
                </div><!-- /.banner_table -->
            </div><!-- /.col-md-12 -->
        </div><!--/.row -->
    </div><!--/.container -->
</section>
<?php endif ?>

