<?php
/**
 * Superultra Theme Customizer
 */

function superultra_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'superultra_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'superultra_customize_partial_blogdescription',
			)
		);
    }
    
    //Banner 



    $wp_customize->add_panel( 'banner_settings', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Banner Settings', 'superultra' ),
		'description'    => __( 'This is Banner area.', 'superultra' ),
    ) );
    
    // Add Settings
    $wp_customize->add_setting('banner_settings', array(
        'transport'         => 'refresh',
        'height'         => 325,
        'sanitize_callback' => 'theme_slug_sanitize_file',
    ));
    // Add Settings
    $wp_customize->add_setting('banner-header_settings', array(
        'transport'         => 'refresh',
    ));
    // Add Settings
    $wp_customize->add_setting('banner-subheader_settings', array(
        'transport'         => 'refresh',
    ));
    // Add Settings
    $wp_customize->add_setting('banner-form_settings', array(
        'transport'         => 'refresh',
    ));



    // Add Section
    $wp_customize->add_section('banner', array(
        'title'             => __('Banner Image', 'superultra'), 
        'priority'          => 40,
        'panel'             => 'banner_settings',
    )); 
    
    $wp_customize->add_section('banner_header', array(
        'title'             => __('Banner Header', 'superultra'), 
        'priority'          => 50,
        'panel'             => 'banner_settings',
    )); 
    $wp_customize->add_section('banner_subheader', array(
        'title'             => __('Banner Sub Header', 'superultra'), 
        'priority'          => 60,
        'panel'             => 'banner_settings',
    )); 
    $wp_customize->add_section('banner_form', array(
        'title'             => __('Banner Form', 'superultra'), 
        'priority'          => 70,
        'panel'             => 'banner_settings',
    )); 
    

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
        'label'             => __('Banner Image', 'superultra'),
        'section'           => 'banner',
        'settings'          => 'banner_settings',    
    ))); 

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner_header', array(
        'label'      => __( 'Banner Header', 'superultra' ),
        'section'    => 'banner_header',
        'settings'   => 'banner-header_settings',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner_suheader', array(
        'label'      => __( 'Banner Sub Header', 'superultra' ),
        'section'    => 'banner_subheader',
        'settings'   => 'banner-subheader_settings',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner_form', array(
        'label'      => __( 'Banner Form shortcode', 'superultra' ),
        'section'    => 'banner_form',
        'settings'   => 'banner-form_settings',
    ) ) );

    
    
    function theme_slug_sanitize_file( $file, $setting ) {
          
        //allowed file types
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png'
        );
          
        //check file type from file name
        $file_ext = wp_check_filetype( $file, $mimes );
          
        //if file has a valid mime type return it, otherwise return default
        return ( $file_ext['ext'] ? $file : $setting->default );
    }
}
add_action( 'customize_register', 'superultra_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function superultra_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function superultra_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function superultra_customize_preview_js() {
	wp_enqueue_script( 'superultra-customizer', get_template_directory_uri() . '/dist/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'superultra_customize_preview_js' );
