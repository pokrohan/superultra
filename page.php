<?php
/**
 * The template for displaying all pages
 */

get_header();
?>
<div id="primary" class="content-area col-md-8">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>

	</main>
	</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
<?php get_footer();
