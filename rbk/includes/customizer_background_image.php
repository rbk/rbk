<?php

function background_image_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'background_image_section' , array(
		'title'       => __( 'Background Image', 'themebackground' ),
		'priority'    => 30,
		'description' => 'Background image uploader.',
	) );
	$wp_customize->add_setting( 'theme_background_image' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_background_image', array(
    'label'    => __( 'Background Image', 'themebackground' ),
    'section'  => 'background_image_section',
    'settings' => 'theme_background_image',
) ) );
}
add_action('customize_register', 'background_image_theme_customizer');

?>