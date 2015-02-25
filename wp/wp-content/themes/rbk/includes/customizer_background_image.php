<?php

function background_image_theme_customizer( $wp_customize ) {
    // Fun code will go here
	$wp_customize->add_section( 'theme_background_image_section' , array(
	    'title'       => __( 'Background Image', 'themeslug' ),
	    'priority'    => 1,
	    'description' => 'Upload a background image.',
	) );
	$wp_customize->add_setting( 'theme_background_image' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_background_image', array(
	    'label'    => __( 'Logo', 'themeslug' ),
	    'section'  => 'theme_background_image_section',
	    'settings' => 'theme_background_image',
	) ) );
}
add_action('customize_register', 'background_image_theme_customizer');

?>