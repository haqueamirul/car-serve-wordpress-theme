<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_position'   => '3',
  'menu_slug'       => 'theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options <small>by Soft-theme</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// Softcar header top section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header_top_section',
  'title'       => 'Header Top Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'header_top_logo',
              'type'        => 'upload',
              'title'       => 'Header Logo',
              'desc'        => 'Upload your header Logo',
          ),
        array(
              'id'          => 'header_top_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'header_top_subtitle',
              'type'        => 'text',
              'title'       => 'SubTitle',
              'desc'        => 'Write SubTitle Here',
          ),

        array(
          'id'              => 'header_top_group',
          'type'            => 'group',
          'title'           => 'Header Service Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Header',
          'fields'          => array(

            array(
              'id'          => 'header_top_icon',
              'type'        => 'icon',
              'title'       => 'Icon',
              'desc'        => 'Select Your Header Service Icon',
            ),
            
            array(
              'id'          => 'header_top_ser_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
            ),

            array(
              'id'          => 'header_ser_text1',
              'type'        => 'text',
              'title'       => 'Service Text Field 1',
              'desc'        => 'Write Service Text 1',
            ),

            array(
              'id'          => 'header_ser_text2',
              'type'        => 'text',
              'title'       => 'Service Text Field 2',
              'desc'        => 'Write Service Text 2',
            ),
          )
        ),

  ), // end: fields
);


// ----------------------------------------
// Softcar Logo section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'main_logo_sec',
  'title'       => 'Main Logo',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'main_logo',
          'type'        => 'upload',
          'title'       => 'Logo',
          'desc'       => 'Upload Your Theme Logo',
        ),
  ), // end: fields
);

// ----------------------------------------
// Softrestaura Slider sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'who_we_r_section',
  'title'       => 'Who We Are Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(



        array(
              'id'          => 'who_we_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'who_we_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),
        array(
              'id'          => 'who_we_image',
              'type'        => 'upload',
              'title'       => 'Who We Are Image',
              'desc'        => 'Upload your Image',
          ),

        array(
          'id'              => 'who_we_are_group',
          'type'            => 'group',
          'title'           => 'Who Content Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Who',
          'fields'          => array(

            array(
              'id'          => 'who_we_icon',
              'type'        => 'icon',
              'title'       => 'Icon',
              'desc'        => 'Select Your Who We are Service Icon',
            ),
            
            array(
              'id'          => 'who_we_con_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
            ),

            array(
              'id'          => 'who_we_con_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
            ),
          )
        ),

  ), // end: fields
);


// ----------------------------------------
// Softcar find servic section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'find_service_section',
  'title'       => 'Find Service Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(



        array(
              'id'          => 'find_service_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'find_service_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),
        array(
              'id'          => 'find_service_bg_image',
              'type'        => 'upload',
              'title'       => 'Background Image',
              'desc'        => 'Upload Your Background Image',
          ),

        array(
          'id'              => 'find_service_group',
          'type'            => 'group',
          'title'           => 'Find Service Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Find Service',
          'fields'          => array(

            array(
              'id'          => 'find_ser_con_icon',
              'type'        => 'icon',
              'title'       => 'Icon',
              'desc'        => 'Select Your Icon',
            ),

            array(
              'id'          => 'find_ser_con_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Your Title Here',
            ),
            
            array(
              'id'          => 'find_ser_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Your Content Here',
            ),
          )
        ),

  ), // end: fields
);



// ----------------------------------------
// Softcar servic section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'soft-service_section',
  'title'       => 'Our Service Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(



        array(
              'id'          => 'servic_sec_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'service_sec_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),

        array(
          'id'              => 'service_sec_group',
          'type'            => 'group',
          'title'           => 'Service Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Service',
          'fields'          => array(

            array(
              'id'          => 'servic_sec_con_icon',
              'type'        => 'icon',
              'title'       => 'Icon',
              'desc'        => 'Select Your Icon',
            ),

            array(
              'id'          => 'ser_sec_con_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Your Title Here',
            ),
            
            array(
              'id'          => 'service_sec_con_conntent',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Your Content Here',
            ),
          )
        ),

  ), // end: fields
);


// ----------------------------------------
// Softcar gallery section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'gallery_section',
  'title'       => 'Gallery Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(



        array(
              'id'          => 'gallery_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'gallery_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),

        array(
          'id'              => 'gallery_sec_group',
          'type'            => 'group',
          'title'           => 'Gallery Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Gallery',
          'fields'          => array(

            array(
              'id'          => 'gallry_image',
              'type'        => 'upload',
              'title'       => 'Gallery Image',
              'desc'        => 'Upload Your Gallery Image',
            ),

            array(
              'id'          => 'gallery_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Your Title Here',
            ),
            
            array(
              'id'          => 'gallery_author_name',
              'type'        => 'text',
              'title'       => 'Author Name',
              'desc'        => 'Write Gallery Author Name',
            ),
          )
        ),

  ), // end: fields
);


// ----------------------------------------
// Softcar Client section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'client_section',
  'title'       => 'Client Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(



        array(
              'id'          => 'client_bg_image',
              'type'        => 'upload',
              'title'       => 'Background Image',
              'desc'        => 'Upload Your Background Image',
          ),
        array(
          'id'              => 'client_group',
          'type'            => 'group',
          'title'           => 'Client Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Client',
          'fields'          => array(

            array(
              'id'          => 'client_image',
              'type'        => 'upload',
              'title'       => 'Client Image',
              'desc'        => 'Upload Your Client Image',
            ),

            array(
              'id'          => 'client_icon',
              'type'        => 'icon',
              'title'       => 'Client Icon',
              'desc'        => 'Select Icon Here',
            ),
            

            array(
              'id'          => 'client_content',
              'type'        => 'textarea',
              'title'       => 'Client Comment',
              'desc'        => 'Write Your Comment',
            ),
            

            array(
              'id'          => 'client_name',
              'type'        => 'text',
              'title'       => 'Client Name',
              'desc'        => 'Write Your client name',
            ),
            
            array(
              'id'          => 'client_company',
              'type'        => 'text',
              'title'       => 'Company Name',
              'desc'        => 'Write Clent Company Name',
            ),
          )
        ),

  ), // end: fields
);

// ----------------------------------------
// Appoinment Section-
// ----------------------------------------
$options[]      = array(
  'name'        => 'appoinment_section',
  'title'       => 'Appoinment Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'appointment_title',
              'type'        => 'text',
              'title'       => 'Appoinment Title',
              'desc'        => 'Write Appoinment Title Here',
          ),
        array(
              'id'          => 'appoint_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),
        array(
              'id'          => 'appointment_image',
              'type'        => 'upload',
              'title'       => 'Appoinmentn Image',
              'desc'        => 'Upload Appoinment Image',
          ),
        array(
              'id'          => 'appointment_switch',
              'type'        => 'switcher',
              'title'       => 'Appoinmentn Form Show or Not',
              'desc'        => 'As Ypu Wish Appoinment Form Show or Not',
          ),

  ), // end: fields
);


// ----------------------------------------
// Copyright Section-
// ----------------------------------------
$options[]      = array(
  'name'        => 'copyright_section',
  'title'       => 'Copyright Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'copyright_text',
              'type'        => 'text',
              'title'       => 'Copyright Text',
              'desc'        => 'Write Copyright Text Here',
              'default'     => '2018 soft-theme. All Rights Reserved | Design by',
          ),
        array(
              'id'          => 'copany_name',
              'type'        => 'text',
              'title'       => 'Company Name',
              'default'     => 'Soft-theme',
              'desc'        => 'Write Company Here',
          ),
        array(
              'id'          => 'company_link', 
              'type'        => 'text',
              'title'       => 'Company URL',
              'default'     => 'http://soft-theme.com',
              'desc'        => 'Write Company URL Here',
          ),

  ), // end: fields
);


CSFramework::instance( $settings, $options );
