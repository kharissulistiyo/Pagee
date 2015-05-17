<?php
/**
 * Pagee Theme Customizer
 *
 * @package Pagee
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pagee_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	// Header background
	$wp_customize->add_setting( 'header_background_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
		'label'   => __( 'Header and Footer Background Color', 'pagee' ),
		'section' => 'colors',
	) ) );

	// Border color
	$wp_customize->add_setting( 'border_color', array(
		'default'           => '#E6E8E4',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
		'label'   => __( 'Border Color', 'pagee' ),
		'section' => 'colors',
	) ) );

	// Text color
	$wp_customize->add_setting( 'text_color', array(
		'default'           => '#4F5151',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
		'label'   => __( 'Text Color', 'pagee' ),
		'section' => 'colors',
	) ) );

	// Secondary color
	$wp_customize->add_setting( 'secondary_color', array(
		'default'           => '#A8AAAA',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
		'label'   => __( 'Secondary Text Color', 'pagee' ),
		'section' => 'colors',
	) ) );

	// Link color
	$wp_customize->add_setting( 'link_color', array(
		'default'           => '#21A2E0',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'   => __( 'Link, Button, Widget Title Border Color', 'pagee' ),
		'section' => 'colors',
	) ) );

	// Hover Link Color
	$wp_customize->add_setting( 'link_color_hover', array(
		'default'           => '#A0D16C',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_hover', array(
		'label'   => __( 'Hovered Link and Button Color', 'pagee' ),
		'section' => 'colors',
	) ) );

	// Single Post Metadata Background Color
	$wp_customize->add_setting( 'metadata_background', array(
		'default'           => '#F4FDF0',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'metadata_background', array(
		'label'   => __( 'Single Post Metadata Background Color', 'pagee' ),
		'section' => 'colors',
	) ) );

}
add_action( 'customize_register', 'pagee_customize_register' );
