<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'superultra' ); ?></a>

	<header id="masthead" class="site-header">
	<nav id ="menu" class="navbar navbar-expand-md navbar-light" role="navigation">
		<div class="site-branding navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$superultra_description = get_bloginfo( 'description', 'display' );
			if ( $superultra_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $superultra_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="WP_Bootstrap_Navwalker" aria-controls="WP_Bootstrap_Navwalker" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
			wp_nav_menu([
				'menu'  => 'primary',
				'theme_location'  => 'primary',
				'container'        => 'div',
				'container_id'     => 'bs4navbar',
				'container_class'  => 'collapse navbar-collapse',
				'menu_id'          => 'main-menu',
				'menu_class'       => 'navbar-nav ml-auto',
				'depth'            => 3,
				'fallback-cb'      => 'WP_Bootstrap_Navwalker::fallback',
				'walker'           => new WP_Bootstrap_Navwalker()
			]);
		?>
		</nav>
		<?php
			if ( is_active_sidebar( 'banner' ) ) : ?>
				<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
				<?php dynamic_sidebar( 'banner' ); ?>
				</div>
		<?php endif; ?>
	</header>

<div id="content" class="site-content row">

