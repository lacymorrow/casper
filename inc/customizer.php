<?php
/**
 * Casper Theme Customizer
 *
 * @package Casper
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function casper_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->default = '#3A4145';
	// Logo Controls
	$wp_customize->add_section( 'casper_logo_section' , array(
	    'title'       => __( 'Logo', 'casper' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to display above the site title on each page',
	) );
	$wp_customize->add_setting( 'casper_logo'  , array(
	    'transport'   => 'postMessage'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'casper_logo', array(
	    'label'    => __( 'Logo', 'casper' ),
	    'section'  => 'casper_logo_section',
	    'settings' => 'casper_logo',
	) ) );
	// Custom Controls
	$wp_customize->add_section(
	    'casper_custom',
	    array(
	        'title'     => 'Casper Options',
	        'priority'  => 200
	    )
	);
	// Theme header bg color
	$wp_customize->add_setting( 'casper_header_color' , array(
	    'default'     => '#303538',
	    'transport'   => 'postMessage'
	) );
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'header_color',
	        array(
	            'label'      => __( 'Header Color', 'casper' ),
	            'section'    => 'colors',
	            'settings'   => 'casper_header_color'
	        )
	    )
	);
	// Home head text color
	$wp_customize->add_setting( 'casper_header_textcolor' , array(
	    'default'     => '#ffffff',
	    'transport'   => 'postMessage'
	) );
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'casper_home_header_color',
	        array(
	            'label'      => __( 'Home Header Text Color', 'casper' ),
	            'section'    => 'colors',
	            'settings'   => 'casper_header_textcolor',
	            'priority'	 => 1
	        )
	    )
	);
	// Theme link color
	$wp_customize->add_setting( 'casper_link_color' , array(
	    'default'     => '#4a4a4a',
	    'transport'   => 'postMessage'
	) );
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link_color',
	        array(
	            'label'      => __( 'Link Color', 'casper' ),
	            'section'    => 'colors',
	            'settings'   => 'casper_link_color'
	        )
	    )
	);
	// Theme hover color
	$wp_customize->add_setting( 'casper_hover_color' , array(
	    'default'     => '#57A3E8',
	    'transport'   => 'postMessage'
	) );
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'hover_color',
	        array(
	            'label'      => __( 'Hover Color', 'casper' ),
	            'section'    => 'colors',
	            'settings'   => 'casper_hover_color'
	        )
	    )
	);
	// Display header on all pages (vs home only)
	$wp_customize->add_setting(
	    'casper_display_header',
	    array(
	        'default'    =>  'false',
	        'transport'  =>  'postMessage'
	    )
	);
	$wp_customize->add_control(
	    'casper_display_header',
	    array(
	        'section'   => 'casper_custom',
	        'label'     => 'Display header on all pages',
	        'type'      => 'checkbox'
	    )
	);
}
add_action( 'customize_register', 'casper_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function casper_customize_preview_js() {
	wp_enqueue_script( 'casper_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'casper_customize_preview_js' );
