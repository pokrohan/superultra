<?php

/**
 * Register widget area.
 */
function superultra_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Right Sidebar', 'superultra' ),
			'id'            => 'right-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'superultra' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'superultra_widgets_init' );

function about_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'About Section', 'superultra' ),
            'id'          => 'superultra-about', 
            'description' => __( 'About Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'about_widgets_init' );

function client_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'Client Section', 'superultra' ),
            'id'          => 'superultra-client', 
            'description' => __( 'Client Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'client_widgets_init' );

function service_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'Service Section', 'superultra' ),
            'id'          => 'superultra-service', 
            'description' => __( 'Service Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'service_widgets_init' );

function subscribe_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'Subscribe Section', 'superultra' ),
            'id'          => 'superultra-subscribe', 
            'description' => __( 'Subscribe Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'subscribe_widgets_init' );

function footer1_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'Footer 1 Section', 'superultra' ),
            'id'          => 'superultra-footer1', 
            'description' => __( 'Footer 1 Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'footer1_widgets_init' );

function footer2_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'Footer 2 Section', 'superultra' ),
            'id'          => 'superultra-footer2', 
            'description' => __( 'Footer 2 Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'footer2_widgets_init' );

function footer3_widgets_init() {
	register_sidebar(
		array(
            'name'        => __( 'Footer 3 Section', 'superultra' ),
            'id'          => 'superultra-footer3', 
            'description' => __( 'Footer 3 Section', 'superultra' ),
        )
	);
}
add_action( 'widgets_init', 'footer3_widgets_init' );


