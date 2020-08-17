<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package superultra
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function superultra_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'superultra_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function superultra_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'superultra_pingback_header' );


function superultra_banner() {
	?><div class="site-banner">
	<div class="banner-item">
        <?php
        if ( is_page_template( 'page-homepage.php' ) && (!empty(get_theme_mod('banner_settings')) )) {
            ?><img src="<?php echo esc_url( get_theme_mod( 'banner_settings' ) ); ?>" alt="banner"> <?php 
        } else {
            ?><img src="<?php echo get_template_directory_uri() . '/images/banner-img.jpg'?>" alt="banner-alt"> <?php
        }
            ?>        
		<div class="banner-caption center">
			<div class="container">
				<h1 class="title">
					<a href="#"><?php echo (get_theme_mod( 'banner-header_settings' ) ); ?></a>
				</h1>
				<div class="item-desc">
                <?php echo (get_theme_mod( 'banner-subheader_settings' ) ); ?>
                    <div><?php echo (get_theme_mod( 'banner-form_settings' ) ); ?><div>
				</div>
			</div>
        </div>
	</div>
</div>
</div>
</div>
<?php }
add_action( 'su_banner', 'superultra_banner' );



