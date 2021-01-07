<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
  'title'      => 'SoftCar All Sections', 
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'header_banner_section',
      'title'     => 'Header Banner Sections',
      'view'          => 'clone',
      'clone_id'      => 'benner_sec_content',
      'clone_title'   => 'Add New',
      'fields'    => array(

        // shortcode option field
        array(
          'id'    => 'header_logo',
          'type'  => 'upload',
          'title' => 'Banner Logo',
        ),

        array(
          'id'    => 'banner_title',
          'type'  => 'text',
          'title' => 'Banner Title',
        ),

        array(
          'id'    => 'banner_subtitle',
          'type'  => 'text',
          'title' => 'Banner SubTitle',
        ),
      ),

      'clone_fields'  => array(

        array(
          'id'        => 'banner_con_icon',
          'type'      => 'icon',
          'title'     => 'Icon Here',
        ),

        array(
          'id'        => 'banner_con_title',
          'type'      => 'text',
          'title'     => 'Title Here',
        ),

        array(
          'id'        => 'banner_con_content',
          'type'      => 'textarea',
          'title'     => 'Content Here',
        ),
      )

    ),

    // begin: shortcode

  ),
);

// -----------------------------------------
// Simple Shortcode Examples               -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Simple Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'cs_simple_1',
      'title'     => 'Simple Shortcode 1',
      'fields'    => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_simple_2',
      'title'     => 'Simple Shortcode 2',
      'fields'    => array(

        array(
          'id'    => 'option_1',
          'type'  => 'text',
          'title' => 'Option 1',
        ),

        array(
          'id'    => 'option_2',
          'type'  => 'text',
          'title' => 'Option 2',
        ),

        array(
          'id'    => 'option_3',
          'type'  => 'text',
          'title' => 'Option 3',
        ),

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_simple_3',
      'title'     => 'Simple Shortcode 3',
      'fields'    => array(

        array(
          'id'         => 'title',
          'type'       => 'text',
          'title'      => 'Title',
        ),

        array(
          'id'         => 'active',
          'type'       => 'switcher',
          'title'      => 'Active',
          'label'      => 'You you want to it ?',
        ),

        array(
          'id'         => 'car',
          'type'       => 'select',
          'title'      => 'Your car',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'opel'     => 'Opel',
            'ferrari'  => 'Ferrari'
          )
        ),

      ),
    ),
    // end: shortcode

  ),
);


CSFramework_Shortcode_Manager::instance( $options );
