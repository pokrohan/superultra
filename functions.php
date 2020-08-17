<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'superultra_setup' ) ) :

	function superultra_setup() {

		load_theme_textdomain( 'superultra', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'superultra' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'superultra_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );


		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'superultra_setup' );

function superultra_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'superultra_content_width', 1140 );
}
add_action( 'after_setup_theme', 'superultra_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function superultra_scripts() {

	wp_enqueue_style( 'superultra-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'superultra-style', 'rtl', 'replace' );

	wp_enqueue_style( 'superultra-style-fontawesome', get_template_directory_uri() . '/src/css/fontawesome-all.min.css');
	wp_enqueue_style( 'rara-companion', get_template_directory_uri() . '/src/css/raratheme-companion-public.css');
	wp_enqueue_style( 'bs-styles', get_template_directory_uri() . '/src/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'superultra-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'jquery-sc', get_template_directory_uri() . '/src/js/jquery-1.12.0.js', array('jquery'), '12345', true );
	wp_enqueue_script( 'jquery-bs-h', get_template_directory_uri() . '/src/bootstrap/bootstrap-hover.js', true );
	wp_enqueue_script( 'jquery-bs', get_template_directory_uri() . '/src/bootstrap/bootstrap.min.js', true );
	wp_enqueue_script( 'jquery-custom', get_template_directory_uri() . '/src/js/custom.js', array('jquery'), '12349', true );
	wp_enqueue_script( 'jquery-sidebar', get_template_directory_uri() . '/src/js/sticky-sidebar.js', array('jquery'), '12347', true );

	//media upload


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'superultra_scripts' );

function superultra_enqueue_google_fonts() { 
	wp_enqueue_style( 'abhaya-libre', 'https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i' ); 
}
add_action( 'wp_enqueue_scripts', 'superultra_enqueue_google_fonts' ); 

//custom footer menu 

function superultra_custom_menu() {
	register_nav_menu('my-custom-menu',__( 'Footer Menu' ));
  }
add_action( 'init', 'superultra_custom_menu' );

/**
 * Bootstrap Navwalker
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * WIdgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Customizer

require get_template_directory() . '/inc/customizer.php';
