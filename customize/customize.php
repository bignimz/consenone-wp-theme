<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    Consenone
 */

add_action( 'customize_register', 'consenone_customize_register' );
function consenone_customize_register( $wp_customize ) {
  // All the Customize Options you create goes here

  // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;



    // Change the Homepage settings title to a different name
    $wp_customize->get_section('static_front_page')->title = __( 'Homepage Settings', 'consenone' );


    // Theme Options Panel
    $wp_customize->add_panel( 'consenone_theme_options', 
        array(
            'priority'       => 100,
            'title'            => __( 'Theme Options', 'consenone' ),
            'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'consenone' ),
        ) 
    );

    // Text Options Section Inside Theme
    $wp_customize->add_section( 'consenone_text_options', 
        array(
            'title'         => __( 'Text Options', 'consenone' ),
            'priority'      => 1,
            'panel'         => 'consenone_theme_options'
        ) 
    );

    // Setting for Copyright text.
    $wp_customize->add_setting( 'consenone_copyright_text',
        array(
            'default'           => __( 'All rights reserved ', 'consenone' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    // Control for Copyright text
    $wp_customize->add_control( 'consenone_copyright_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'consenone_text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        ) 
    );


    // Setting for Read More text.
    $wp_customize->add_setting( 'consenone_readmore_text',
        array(
            'type'              => 'option',
            'default'           => __( 'Read More ', 'consenone' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    // Control for Read More text
    $wp_customize->add_control( 'consenone_readmore_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'consenone_text_options',
            'label'       => 'Read More text',
            'description' => 'Text put here will be as the text for Read More link in the archives',
        ) 
    );

   

}