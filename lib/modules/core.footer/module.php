<?php

/*
 * The footer core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_footer_options' ) ) {
  function shoestrap_module_footer_options( $sections ) {

    // Branding Options
    $section = array( 
  		'title' => __( 'Footer', 'shoestrap' ),
  		'icon' => 'elusive icon-caret-down icon-large'
  	 );

    $fields[] = array( 
      'title'     => __( 'Footer Background Color', 'shoestrap' ),
      'desc'  => __( 'Select the background color for your footer. Default: #282a2b.', 'shoestrap' ),
      'id'        => 'footer_background',
      'default'       => '#282a2b',
      'customizer'=> array(),
      'type'      => 'color'
    );
    
    $fields[] = array( 
      'title'     => __( 'Footer Background Opacity', 'shoestrap' ),
      'desc'  => __( 'Select the opacity level for the footer bar. Default: 100%.', 'shoestrap' ),
      'id'        => 'footer_opacity',
      'default'       => 100,
      'min'       => 0,
      'max'       => 100,
      'type'      => 'slider',
      'fold'      => 'retina_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Footer Text Color', 'shoestrap' ),
      'desc'  => __( 'Select the text color for your footer. Default: #8C8989.', 'shoestrap' ),
      'id'        => 'footer_color',
      'default'       => '#8C8989',
      'customizer'=> array(),
      'type'      => 'color'
    );

    $fields[] = array( 
      'title'     => __( 'Footer Text', 'shoestrap' ),
      'desc'  => __( 'The text that will be displayed in your footer. You can use [year] and [sitename] and they will be replaced appropriately. Default: &copy; [year] [sitename]', 'shoestrap' ),
      'id'        => 'footer_text',
      'default'       => '&copy; [year] [sitename]',
      'customizer'=> array(),
      'type'      => 'textarea'
    );

    $fields[] = array( 
      'title'     => 'Footer Top Border',
      'desc'  => 'Select the border options for your Footer',
      'id'        => 'footer_border_top',
      'type'      => 'border',
      'default'       => array( 
        'size'   => '2',
        'style'   => 'solid',
        'color'   => '#4B4C4D',
      ),
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Footer Top Margin', 'shoestrap' ),
      'desc'  => __( 'Select the top margin of footer in pixels. Default: 0px.', 'shoestrap' ),
      'id'        => 'footer_top_margin',
      'default'       => 0,
      'min'       => 0,
      'max'       => 200,
      'type'      => 'slider',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Show social icons in footer', 'shoestrap' ),
      'desc'  => __( 'Show social icons in the footer. Default: On.', 'shoestrap' ),
      'id'        => 'footer_social_toggle',
      'default'       => 0,
      'customizer'=> array(),
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Footer social links column width', 'shoestrap' ),
      'desc'  => __( 'You can customize the width of the footer social links area. The footer text width will be adjusted accordingly. Default: 5.', 'shoestrap' ),
      'id'        => 'footer_social_width',
      'fold'      => 'footer_social_toggle',
      'default'       => 6,
      'min'       => 3,
      'step'      => 1,
      'max'       => 10,
      'customizer'=> array(),
      'type'      => 'slider',
    );    

    $fields[] = array( 
      'title'     => __( 'Footer social icons open new window', 'shoestrap' ),
      'desc'  => __( 'Social icons in footer will open a new window. Default: On.', 'shoestrap' ),
      'id'        => 'footer_social_new_window_toggle',
      'fold'      => 'footer_social_toggle',
      'default'       => 1,
      'customizer'=> array(),
      'type'      => 'switch',
    );

    $section['fields'] = $fields;

    do_action( 'shoestrap_module_footer_options_modifier' );
    
    $sections[] = $section;
    return $sections;
  }
}
add_filter( 'redux-sections-'.REDUX_OPT_NAME, 'shoestrap_module_footer_options', 90 );   

include_once( dirname( __FILE__ ).'/functions.footer.php' );